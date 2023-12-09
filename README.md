<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Applications Search and FIlter Query

```sql
SELECT *
FROM applications
WHERE EXISTS (
        SELECT *
        FROM users
        WHERE applications.user_id = users.id
        AND users.local_department_id = $localDeptId
    )
    AND (
        $searchTerm IS NULL OR (
            (applications.app_number LIKE '%$searchTerm%')
            OR (applications.vin_number LIKE '%$searchTerm%')
            OR EXISTS (
                SELECT *
                FROM customers
                WHERE applications.customer_id = customers.id
                AND customers.customer_name LIKE '%$searchTerm%'
            )
        )
    )
    AND (
        ($this->startDate IS NULL OR $this->endDate IS NULL)
        OR (applications.app_date BETWEEN '$this->startDate 00:00:00' AND '$this->endDate 23:59:59')
    )
ORDER BY applications.app_date DESC
LIMIT 10;

```

And  Laravel Livewire Rendeer Method based on the above SQL
```php
    public function render()
    {
        $localDeptId = auth()->user()->local_department_id;
        $searchTerm = '%' . trim($this->search) . '%';

        // if ($this->search) {

        $applications = Application::whereHas('user', function ($query) use ($localDeptId) {
            $query->where('local_department_id', $localDeptId);
        })
            ->when($searchTerm, function ($query) use ($searchTerm) {
                $query->where(function ($query) use ($searchTerm) {
                    $query->where('app_number', 'LIKE', $searchTerm)
                        ->orWhere('vin_number', 'LIKE', $searchTerm)
                        ->orWhereHas('customer', function ($query) use ($searchTerm) {
                            $query->where('customer_name', 'LIKE', $searchTerm);
                        });
                });
            })
            ->when($this->startDate && $this->endDate, function ($query) {
                return $query->whereBetween('app_date', [
                    Carbon::parse($this->startDate)->startOfDay(),
                    Carbon::parse($this->endDate)->endOfDay(),
                ]);
            })
            ->with('user', 'category', 'customer')
            ->orderBy('app_date', 'desc')
            ->paginate(10);


        return view('livewire.documents.application.application-table', compact('applications'));
    }
```
