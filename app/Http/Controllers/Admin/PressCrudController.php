<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\PressRequest as StoreRequest;
use App\Http\Requests\PressRequest as UpdateRequest;

class PressCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Press');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/press');
        $this->crud->setEntityNameStrings('press', 'presses');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        // $this->crud->setFromDb();

        // ------ CRUD FIELDS
        $this->crud->addField([
            'name' => 'name',
            'label' => "Name",
            'type' => 'text',
        ]);
        $this->crud->addField([  // Select2
            'label' => "Print Method",
            'type' => 'select2',
            'name' => 'print_method_id', // the db column for the foreign key
            'entity' => 'printMethod', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "App\Models\Print_method" // foreign key model
        ]);
        $this->crud->addField([   // Number
            'name' => 'click_black',
            'label' => 'Black Click Price (p)',
            'type' => 'number',
            // optionals
            'attributes' => ["step" => 0.1], // allow decimals
            'suffix' => "p",
        ]);
        $this->crud->addField([   // Number
            'name' => 'click_colour',
            'label' => 'Colour Click Price (p)',
            'type' => 'number',
            // optionals
            'attributes' => ["step" => 0.1], // allow decimals
            'suffix' => "p",
        ]);
        $this->crud->addField([   // Number
            'name' => 'weight_min',
            'label' => 'Min Stock Weight (gsm)',
            'type' => 'number',
            'suffix' => "gsm",
        ]);
        $this->crud->addField([   // Number
            'name' => 'weight_max',
            'label' => 'Max Stock Weight (gsm)',
            'type' => 'number',
            'suffix' => "gsm",
        ]);
        $this->crud->addField([   // Number
            'name' => 'grip_top',
            'label' => 'Grip - Top (mm)',
            'type' => 'number',
            'suffix' => "mm",
        ]);
        $this->crud->addField([   // Number
            'name' => 'grip_bottom',
            'label' => 'Grip - Bottom (mm)',
            'type' => 'number',
            'suffix' => "mm",
        ]);
        $this->crud->addField([   // Number
            'name' => 'grip_sides',
            'label' => 'Grip - Sides (mm)',
            'type' => 'number',
            'suffix' => "mm",
        ]);
        $this->crud->addField([  // Select2
            'label' => "Max Print Size",
            'type' => 'select2',
            'name' => 'size_max_id', // the db column for the foreign key
            'entity' => 'sizeMax', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "App\Models\Size" // foreign key model
        ]);
        $this->crud->addField([  // Select2
            'label' => "Min Print Size",
            'type' => 'select2',
            'name' => 'size_min_id', // the db column for the foreign key
            'entity' => 'sizeMin', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "App\Models\Size" // foreign key model
        ]);

        // ------ CRUD COLUMNS
        $this->crud->addField([
            'name' => 'name',
            'label' => "Name",
            'type' => 'text',
        ]);
        $this->crud->addColumn([  // Select2
            'label' => "Print Method",
            'type' => 'select',
            'name' => 'print_method_id', // the db column for the foreign key
            'entity' => 'printMethod', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "App\Models\Print_method" // foreign key model
        ]);
        $this->crud->addColumn([   // Number
            'name' => 'click_black',
            'label' => 'Black Click Price (p)',
            'type' => 'number',
            // optionals
            'attributes' => ["step" => 0.1], // allow decimals
            'suffix' => "p",
        ]);
        $this->crud->addColumn([   // Number
            'name' => 'click_colour',
            'label' => 'Colour Click Price (p)',
            'type' => 'number',
            // optionals
            'attributes' => ["step" => 0.1], // allow decimals
            'suffix' => "p",
        ]);
        // $this->crud->addColumn([   // Number
        //     'name' => 'weight_min',
        //     'label' => 'Min Stock Weight (gsm)',
        //     'type' => 'number',
        //     'suffix' => "gsm",
        // ]);
        $this->crud->addColumn([   // Number
            'name' => 'weight_max',
            'label' => 'Max Stock Weight (gsm)',
            'type' => 'number',
            'suffix' => "gsm",
        ]);
        // $this->crud->addColumn([   // Number
        //     'name' => 'grip_top',
        //     'label' => 'Grip - Top (mm)',
        //     'type' => 'number',
        //     'suffix' => "mm",
        // ]);
        // $this->crud->addColumn([   // Number
        //     'name' => 'grip_bottom',
        //     'label' => 'Grip - Bottom (mm)',
        //     'type' => 'number',
        //     'suffix' => "mm",
        // ]);
        // $this->crud->addColumn([   // Number
        //     'name' => 'grip_sides',
        //     'label' => 'Grip - Sides (mm)',
        //     'type' => 'number',
        //     'suffix' => "mm",
        // ]);
        $this->crud->addColumn([  // Select2
            'label' => "Max Print Size",
            'type' => 'select',
            'name' => 'size_max_id', // the db column for the foreign key
            'entity' => 'sizeMax', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "App\Models\Size" // foreign key model
        ]);
        // $this->crud->addColumn([  // Select2
        //     'label' => "Min Print Size",
        //     'type' => 'select',
        //     'name' => 'size_min_id', // the db column for the foreign key
        //     'entity' => 'sizeMin', // the method that defines the relationship in your Model
        //     'attribute' => 'name', // foreign key attribute that is shown to user
        //     'model' => "App\Models\Size" // foreign key model
        // ]);

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