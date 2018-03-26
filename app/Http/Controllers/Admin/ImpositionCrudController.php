<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ImpositionRequest as StoreRequest;
use App\Http\Requests\ImpositionRequest as UpdateRequest;

class ImpositionCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Imposition');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/imposition');
        $this->crud->setEntityNameStrings('imposition', 'impositions');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        $this->crud->setFromDb();

        // ------ CRUD FIELDS
        $this->crud->addField([  // Select2
           'label' => "Press",
           'type' => 'select2',
           'name' => 'press_id', // the db column for the foreign key
           'entity' => 'press', // the method that defines the relationship in your Model
           'attribute' => 'name', // foreign key attribute that is shown to user
           'model' => "App\Models\Press" // foreign key model
        ]);
        $this->crud->addField([  // Select2
           'label' => "Imposition Type",
           'type' => 'select2',
           'name' => 'impose_type_id', // the db column for the foreign key
           'entity' => 'type', // the method that defines the relationship in your Model
           'attribute' => 'name', // foreign key attribute that is shown to user
           'model' => "App\Models\Impose_type" // foreign key model
        ]);
        $this->crud->addField([  // Select2
           'label' => "Finished Size",
           'type' => 'select2',
           'name' => 'finished_size_id', // the db column for the foreign key
           'entity' => 'finished_size', // the method that defines the relationship in your Model
           'attribute' => 'name', // foreign key attribute that is shown to user
           'model' => "App\Models\Size" // foreign key model
        ]);
        $this->crud->addField([  // Select2
           'label' => "Sheet Size",
           'type' => 'select2',
           'name' => 'sheet_size_id', // the db column for the foreign key
           'entity' => 'sheet_size', // the method that defines the relationship in your Model
           'attribute' => 'name', // foreign key attribute that is shown to user
           'model' => "App\Models\Size" // foreign key model
        ]);
        $this->crud->addField([   // Checkbox
            'name' => 'duplex',
            'label' => 'Duplex',
            'type' => 'checkbox'
        ]);
        $this->crud->addField([ // select_from_array
            'name' => 'orientation',
            'label' => "Orientation",
            'type' => 'select_from_array',
            'options' => ['portrait'=>'Portrait','landscape'=>'Landscape'],
            'allows_null' => false,
            'default' => 'portrait',
        ]);
        $this->crud->addField([   // Number
            'name' => 'rows',
            'label' => 'Rows',
            'type' => 'number',
        ]);
        $this->crud->addField([   // Number
            'name' => 'columns',
            'label' => 'Columns',
            'type' => 'number',
        ]);
        $this->crud->addField([   // Number
            'name' => 'bleed_x',
            'label' => 'Bleed X (mm)',
            'type' => 'number',
            'suffix' => 'mm'
        ]);
        $this->crud->addField([   // Number
            'name' => 'bleed_y',
            'label' => 'Bleed Y (mm)',
            'type' => 'number',
            'suffix' => 'mm'
        ]);
        $this->crud->addField([   // Number
            'name' => 'gutter',
            'label' => 'Gutter (mm)',
            'type' => 'number',
            'suffix' => 'mm'
        ]);
        $this->crud->addField([   // Checkbox
            'name' => 'marks',
            'label' => 'Print Marks',
            'type' => 'checkbox'
        ]);

        // ------ CRUD COLUMNS
        $this->crud->addColumn([  // Select2
           'label' => "Press",
           'type' => 'select',
           'name' => 'press_id', // the db column for the foreign key
           'entity' => 'press', // the method that defines the relationship in your Model
           'attribute' => 'name', // foreign key attribute that is shown to user
           'model' => "App\Models\Press" // foreign key model
        ]);
        $this->crud->addColumn([  // Select2
           'label' => "Imposition Type",
           'type' => 'select',
           'name' => 'impose_type_id', // the db column for the foreign key
           'entity' => 'type', // the method that defines the relationship in your Model
           'attribute' => 'name', // foreign key attribute that is shown to user
           'model' => "App\Models\Impose_type" // foreign key model
        ]);
        $this->crud->addColumn([  // Select2
           'label' => "Finished Size",
           'type' => 'select',
           'name' => 'finished_size_id', // the db column for the foreign key
           'entity' => 'finished_size', // the method that defines the relationship in your Model
           'attribute' => 'name', // foreign key attribute that is shown to user
           'model' => "App\Models\Size" // foreign key model
        ]);
        $this->crud->addColumn([  // Select2
           'label' => "Sheet Size",
           'type' => 'select',
           'name' => 'sheet_size_id', // the db column for the foreign key
           'entity' => 'sheet_size', // the method that defines the relationship in your Model
           'attribute' => 'name', // foreign key attribute that is shown to user
           'model' => "App\Models\Size" // foreign key model
        ]);
        $this->crud->addColumn([   // Checkbox
            'name' => 'duplex',
            'label' => 'Duplex',
            'type' => 'check'
        ]);
        $this->crud->addColumn([ // select_from_array
            'name' => 'orientation',
            'label' => "Orientation",
            'type' => 'select_from_array',
            'options' => ['portrait'=>'Portrait','landscape'=>'Landscape'],
            'allows_null' => false,
            'default' => 'portrait',
        ]);
        $this->crud->addColumn([   // Number
            'name' => 'rows',
            'label' => 'Rows',
            'type' => 'number',
        ]);
        $this->crud->addColumn([   // Number
            'name' => 'columns',
            'label' => 'Columns',
            'type' => 'number',
        ]);
        $this->crud->addColumn([   // Number
            'name' => 'bleed_x',
            'label' => 'Bleed X (mm)',
            'type' => 'number',
            'suffix' => 'mm'
        ]);
        $this->crud->addColumn([   // Number
            'name' => 'bleed_y',
            'label' => 'Bleed Y (mm)',
            'type' => 'number',
            'suffix' => 'mm'
        ]);
        $this->crud->addColumn([   // Number
            'name' => 'gutter',
            'label' => 'Gutter (mm)',
            'type' => 'number',
            'suffix' => 'mm'
        ]);
        $this->crud->addColumn([   // Checkbox
            'name' => 'marks',
            'label' => 'Print Marks',
            'type' => 'check'
        ]);
        // ------ CRUD BUTTONS
        // possible positions: 'beginning' and 'end'; defaults to 'beginning' for the 'line' stack, 'end' for the others;
        // $this->crud->addButton($stack, $name, $type, $content, $position); // add a button; possible types are: view, model_function
        // $this->crud->addButtonFromModelFunction($stack, $name, $model_function_name, $position); // add a button whose HTML is returned by a method in the CRUD model
        // $this->crud->addButtonFromView($stack, $name, $view, $position); // add a button whose HTML is in a view placed at resources\views\vendor\backpack\crud\buttons
        // $this->crud->removeButton($name);
        // $this->crud->removeButtonFromStack($name, $stack);
        // $this->crud->removeAllButtons();
        // $this->crud->removeAllButtonsFromStack('line');

        // ------ CRUD ACCESS
        // $this->crud->allowAccess(['list', 'create', 'update', 'reorder', 'delete']);
        // $this->crud->denyAccess(['list', 'create', 'update', 'reorder', 'delete']);

        // ------ CRUD REORDER
        // $this->crud->enableReorder('label_name', MAX_TREE_LEVEL);
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('reorder');

        // ------ CRUD DETAILS ROW
        // $this->crud->enableDetailsRow();
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('details_row');
        // NOTE: you also need to do overwrite the showDetailsRow($id) method in your EntityCrudController to show whatever you'd like in the details row OR overwrite the views/backpack/crud/details_row.blade.php

        // ------ REVISIONS
        // You also need to use \Venturecraft\Revisionable\RevisionableTrait;
        // Please check out: https://laravel-backpack.readme.io/docs/crud#revisions
        // $this->crud->allowAccess('revisions');

        // ------ AJAX TABLE VIEW
        // Please note the drawbacks of this though:
        // - 1-n and n-n columns are not searchable
        // - date and datetime columns won't be sortable anymore
        // $this->crud->enableAjaxTable();

        // ------ DATATABLE EXPORT BUTTONS
        // Show export to PDF, CSV, XLS and Print buttons on the table view.
        // Does not work well with AJAX datatables.
        // $this->crud->enableExportButtons();

        // ------ ADVANCED QUERIES
        // $this->crud->addClause('active');
        // $this->crud->addClause('type', 'car');
        // $this->crud->addClause('where', 'name', '==', 'car');
        // $this->crud->addClause('whereName', 'car');
        // $this->crud->addClause('whereHas', 'posts', function($query) {
        //     $query->activePosts();
        // });
        // $this->crud->addClause('withoutGlobalScopes');
        // $this->crud->addClause('withoutGlobalScope', VisibleScope::class);
        // $this->crud->with(); // eager load relationships
        // $this->crud->orderBy();
        // $this->crud->groupBy();
        // $this->crud->limit();
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
