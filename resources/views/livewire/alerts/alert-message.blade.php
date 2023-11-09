<div>
    @if (session()->has('success'))
        <div class="bg-emerald-300 text-emerald-800 px-6 py-2 rounded shadow" wire:poll.3s="hideAlert('success')">
            {{ session()->get('success') }}
        </div>
    @endif

    @if (session()->has('danger'))
        <div class="bg-red-300 text-red-800 px-6 py-2 rounded shadow" wire:poll.3s="hideAlert('danger')">
            {{ session()->get('danger') }}
        </div>
    @endif

    @if (session()->has('warning'))
        <div class="bg-yellow-300 text-yellow-800 px-6 py-2 rounded shadow" wire:poll.3s="hideAlert('warning')">
            {{ session()->get('warning') }}
        </div>
    @endif
</div>
