<?php

namespace App\Admin\Controllers;

use App\Models\Messages;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MessagesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Messages';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Messages());

        $grid->column('id', __('Id'));
        $grid->column('message', __('Message'));
        $grid->column('type', __('Type'));
        $grid->column('file', __('File'));
        $grid->column('project_id', __('Project id'));
        $grid->column('from_id', __('From id'));
        $grid->column('to_id', __('To id'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Messages::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('message', __('Message'));
        $show->field('type', __('Type'));
        $show->field('file', __('File'));
        $show->field('project_id', __('Project id'));
        $show->field('from_id', __('From id'));
        $show->field('to_id', __('To id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Messages());

        $form->text('message', __('Message'));
        $form->number('type', __('Type'));
        $form->file('file', __('File'));
        $form->number('project_id', __('Project id'));
        $form->number('from_id', __('From id'));
        $form->number('to_id', __('To id'));

        return $form;
    }
}
