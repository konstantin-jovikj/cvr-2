<?php

use App\Models\Role;
use App\Livewire\Users;
use App\Livewire\HomePage;
use App\Livewire\EditUserForm;
use App\Models\ModificationType;
use App\Livewire\SuperAdmin\AddIt;
use App\Livewire\SuperAdmin\Roles;
use App\Livewire\SuperAdmin\EditIt;
use App\Livewire\SuperAdmin\AddRole;
use Illuminate\Support\Facades\Route;
use App\Livewire\Errors\NotAuthorized;
use App\Livewire\SuperAdmin\EditAdmin;
use App\Http\Controllers\PdfController;
use App\Livewire\SuperAdmin\ItLocalDep;
use App\Livewire\BasicData\Fuel\AddFuel;
use App\Livewire\BasicData\Fuel\EditFuel;
use App\Livewire\BasicData\Notes\AddNote;
use App\Livewire\BasicData\Types\AddType;
use App\Livewire\BasicData\Fuel\FuelTable;
use App\Livewire\BasicData\Notes\EditNote;
use App\Livewire\BasicData\Types\EditType;
use App\Livewire\BasicData\Brands\AddBrand;
use App\Livewire\BasicData\Colors\AddColor;
use App\Livewire\BasicData\Images\AddImage;
use App\Livewire\BasicData\Shapes\AddShape;
use App\Livewire\BasicData\Brands\EditBrand;
use App\Livewire\BasicData\Colors\EditColor;
use App\Livewire\BasicData\Notes\NotesTable;
use App\Livewire\BasicData\Shapes\EditShape;
use App\Livewire\BasicData\Types\TypesTable;
use App\Livewire\AdminRegister\AdminRegister;
use App\Livewire\BasicData\Brands\BrandsTable;
use App\Livewire\BasicData\Colors\ColorsTable;
use App\Livewire\BasicData\Shapes\ShapesTable;
use App\Livewire\BasicData\Pictures\AddPicture;
use App\Livewire\BasicData\Pictures\EditPicture;
use App\Livewire\Documents\Dossier\DossierTable;
use App\Livewire\SuperAdmin\SuperAdminDashboard;
use App\Livewire\BasicData\Customers\AddCustomer;
use App\Livewire\BasicData\Mediators\AddMediator;
use App\Livewire\BasicData\Categories\AddCategory;
use App\Livewire\BasicData\Customers\EditCustomer;
use App\Livewire\BasicData\Mediators\EditMediator;
use App\Livewire\BasicData\Pictures\PicturesTable;
use App\Livewire\Documents\Application\EditImages;
use App\Livewire\BasicData\Categories\EditCategory;
use App\Livewire\SuperAdmin\MvrSuperAdminDashboard;
use App\Livewire\SuperAdmin\StpSuperAdminDashboard;
use App\Livewire\BasicData\Customers\CustomersTable;
use App\Livewire\BasicData\Mediators\MediatorsTable;
use App\Livewire\BasicData\RelatedDocs\AddRelatedDoc;
use App\Livewire\Documents\Application\EditDocuments;
use App\Http\Controllers\Certificate\PrintCertificate;
use App\Http\Controllers\Plate\PrintPlate;
use App\Livewire\BasicData\Categories\CategoriesTable;
use App\Livewire\BasicData\RelatedDocs\EditRelatedDoc;
use App\Livewire\Documents\Application\AddApplication;
use App\Livewire\Documents\Certificate\AddCertificate;
use App\Livewire\Documents\Application\EditApplication;
use App\Livewire\Documents\Application\ImageController;
use App\Livewire\BasicData\RelatedDocs\RelatedDocsTable;
use App\Livewire\Documents\Application\ApplicationTable;
use App\Livewire\BasicData\Manufacturers\AddManufacturer;
use App\Livewire\Documents\Application\DownloadAssocDocs;
use App\Livewire\BasicData\Manufacturers\EditManufacturer;
use App\Livewire\Documents\Application\ApplicationDetails;
use App\Livewire\BasicData\Manufacturers\ManufacturersTable;
use App\Livewire\BasicData\ApplicationDocs\ManageAppTypeDocs;
use App\Livewire\BasicData\ModificationTypes\AddModification;
use App\Livewire\BasicData\ModificationTypes\EditModification;
use App\Livewire\BasicData\ApplicationTypes\AddApplicationType;
use App\Livewire\BasicData\ModificationTypes\ModificationTable;
use App\Livewire\BasicData\ApplicationTypes\EditApplicationType;
use App\Livewire\Documents\Application\Pdf\EdinecnoOdobreniePdf;
use App\Livewire\BasicData\ApplicationPhotos\ManageAppTypePhotos;
use App\Livewire\BasicData\ApplicationTypes\ApplicationTypeTable;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// Route::view('errors.not-authorized', 'not-authorized');

Route::get('/notauthorised', NotAuthorized::class)->name('not.authorised');

Route::get('/homepage', HomePage::class)->name('homepage');

// SUPERADMIN START
Route::get('/users', Users::class)->name('users');
Route::get('/user/{user}/edit', EditUserForm::class)->name('edituser');
Route::get('/roles', Roles::class)->name('roles');
Route::get('/role/add', AddRole::class)->name('role.add');


Route::get('/superadmin/dashboard', SuperAdminDashboard::class)->name('superadmin.dashboard');
Route::get('/mvr/superadmin/dashboard', MvrSuperAdminDashboard::class)->name('mvrsuperadmin.dashboard');
Route::get('/stp/superadmin/dashboard', StpSuperAdminDashboard::class)->name('stpsuperadmin.dashboard');

Route::get('/register/admin/', AdminRegister::class)->name('admin.register');
Route::get('/admin/{user}/edit', EditAdmin::class)->name('edit.admin');

Route::get('/superadmin/it', ItLocalDep::class)->name('inspekciski.tela');

Route::get('/it/{localDepartment}/edit', EditIt::class)->name('edit.it');
Route::get('/it/create', AddIt::class)->name('add.it');

// SUPERADMIN END

// Basic Data Routes

Route::get('/it/manufacturers/all', ManufacturersTable::class)->name('manufacturers.all');
Route::get('/it/manufacturers/add', AddManufacturer::class)->name('manufacturer.add');
Route::get('/it/manufacturers/{manufacturer}/edit', EditManufacturer::class)->name('manufacturer.edit');

Route::get('/it/brands/all', BrandsTable::class)->name('brands.all');
Route::get('/it/brands/add', AddBrand::class)->name('brand.add');
Route::get('/it/brand/{brand}/edit', EditBrand::class)->name('brand.edit');


Route::get('/it/types/all', TypesTable::class)->name('types.all');
Route::get('/it/types/add', AddType::class)->name('type.add');
Route::get('.it/types/{type}/edit', EditType::class)->name('type.edit');


Route::get('/it/categories/all', CategoriesTable::class)->name('categories.all');
Route::get('/it/categories/add', AddCategory::class)->name('category.add');
Route::get('/it/categories/{category}/edit', EditCategory::class)->name('category.edit');

Route::get('/it/shapes/all', ShapesTable::class)->name('shapes.all');
Route::get('/it/shapes/add', AddShape::class)->name('shape.add');
Route::get('/it/shapes/{shape}/edit', EditShape::class)->name('shape.edit');

Route::get('/it/fuel/all', FuelTable::class)->name('fuel.all');
Route::get('/it/fuel/add', AddFuel::class)->name('fuel.add');
Route::get('/it/fuel/{fuel}/edit', EditFuel::class)->name('fuel.edit');

Route::get('/it/colors/all', ColorsTable::class)->name('colors.all');
Route::get('/it/colors/add', AddColor::class)->name('color.add');
Route::get('/it/colors/{color}/edit', EditColor::class)->name('color.edit');

Route::get('/it/notes/all', NotesTable::class)->name('notes.all');
Route::get('/it/notes/add', AddNote::class)->name('note.add');
Route::get('/it/notes/{note}/edit', EditNote::class)->name('note.edit');

Route::get('/it/pictures/all', PicturesTable::class)->name('pictures.all');
Route::get('/it/picture/add', AddPicture::class)->name('picture.add');
Route::get('/it/picture/{picture}/edit', EditPicture::class)->name('picture.edit');

Route::get('/it/applicationtype/all', ApplicationTypeTable::class)->name('applicationtype.all');
Route::get('/it/applicationtype/add', AddApplicationType::class)->name('applicationtype.add');
Route::get('/it/applicationtype/{applicationtype}/edit', EditApplicationType::class)->name('applicationtype.edit');

Route::get('/it/applicationphotos/', ManageAppTypePhotos::class)->name('application_photos');

Route::get('/it/relateddocs/', RelatedDocsTable::class)->name('relateddocs.all');
Route::get('/it/relateddocs/add', AddRelatedDoc::class)->name('relateddoc.add');
Route::get('/it/relateddocs/{relateddocuments}/edit', EditRelatedDoc::class)->name('relateddoc.edit');

Route::get('/it/applicationdocs/', ManageAppTypeDocs::class)->name('application_docs');

Route::get('/it/mediators/all', MediatorsTable::class)->name('mediators.all');
Route::get('/it/mediator/add', AddMediator::class)->name('mediator.add');
Route::get('/it/mediator/{mediator}/edit', EditMediator::class)->name('mediator.edit');

Route::get('/it/modifications/all', ModificationTable::class)->name('modifications.all');
Route::get('/it/modification/add', AddModification::class)->name('modification.add');
Route::get('/it/modification/{modificationtype}/edit', EditModification::class)->name('modification.edit');


Route::get('/it/customers/all', CustomersTable::class)->name('customers.all');
Route::get('/it/customer/add', AddCustomer::class)->name('customer.add');
Route::get('/it/customer/{customer}/edit', EditCustomer::class)->name('customer.edit');


Route::get('/it/application/{customer}/add', AddApplication::class)->name('application.add');
Route::get('/it/applications/all', ApplicationTable::class)->name('applications.all');
Route::get('/it/application/{application}/details', ApplicationDetails::class)->name('application.details');
Route::get('/it/application/{application}/edit', EditApplication::class)->name('application.edit');
Route::get('/it/application/images/{application}/edit', EditImages::class)->name('application.images.edit');
Route::get('/it/application/documents/{application}/edit', EditDocuments::class)->name('application.documents.edit');


// CERTIFICATE
Route::get('/it/certificate/{customer}/all', DossierTable::class)->name('user.dossier');


// Route::middleware('occupied')->group(function () {
    Route::get('/it/certificate/{application}/{customer}/add', AddCertificate::class)->name('certificate.add');
// });

//Print Tablica (Plate)
Route::get('/it/plate/{application}/pdf', [PrintPlate::class, 'printPlatePdf'])->name('pdf.plate.print');

// PDF
Route::get('it/application/{application}/eo/pdf', [PdfController::class, 'generatePdf'])->name('pdf.apptest');



//Print Certificate

Route::get('/it/application/{application}/certificate/pdf', [PrintCertificate::class, 'certificatePrintPdf'])->name('print.certificate');


require __DIR__ . '/auth.php';
