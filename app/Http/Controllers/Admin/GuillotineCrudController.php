<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\GuillotineRequest as StoreRequest;
use App\Http\Requests\GuillotineRequest as UpdateRequest;

class GuillotineCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Guillotine');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/guillotine');
        $this->crud->setEntityNameStrings('guillotine', 'guillotines');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        $this->crud->setFromDb();

        // ------ CRUD FIELDS
        $this->crud->addField([ // Text
            'name' => 'name',
            'label' => "Name",
            'type' => 'text'
        ]);

        $this->crud->addField([   // Number
            'name' => 'max_width',
            'label' => 'Max Width (mm)',
            'type' => 'number',
            'suffix' => "mm",
        ]);

        $this->crud->addField([   // Number
            'name' => 'max_depth',
            'label' => 'Max Depth (mm)',
            'type' => 'number',
            'suffix' => "mm",
        ]);

        $this->crud->addField([   // Number
            'name' => 'min_depth',
            'label' => 'Min Depth (mm)',
            'type' => 'number',
            'suffix' => "mm",
        ]);

        $this->crud->addField([   // Number
            'name' => 'max_stack_height',
            'label' => 'Max Stack Height (mm)',
            'type' => 'number',
            'suffix' => "mm",
        ]);

        // ------ CRUD COLUMNS
        $this->crud->addColumn([ // Text
            'name' => 'name',
            'label' => "Name",
            'type' => 'text'
        ]);

        $this->crud->addColumn([ // Text
            'name' => 'max_width',
            'label' => "Max Width (mm)",
            'type' => 'number',
            'suffix' => 'mm'
        ]);

        $this->crud->addColumn([ // Text
            'name' => 'max_depth',
            'label' => "Max Depth (mm)",
            'type' => 'number',
            'suffix' => 'mm'
        ]);

        $this->crud->addColumn([ // Text
            'name' => 'min_depth',
            'label' => "Min Depth (mm)",
            'type' => 'number',
            'suffix' => 'mm'
        ]);

        $this->crud->addColumn([ // Text
            'name' => 'max_stack_height',
            'label' => "Max Stack Height (mm)",
            'type' => 'number',
            'suffix' => 'mm'
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
