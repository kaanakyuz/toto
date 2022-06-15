<?php

namespace App\Admin\Controllers;

use App\Models\EventList;
use App\Models\Week;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class EventListsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'EventList';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new EventList());


        $grid->column('id', __('Id'));
        $grid->column('week_id', __('Week id'));
        $grid->column('event_name', __('Event name'));
        $grid->column('event_id', __('Event id'));
        $grid->column('event_date', __('Event date'));
        $grid->column('score', __('Score'));
        $grid->column('result', __('Result'));
     //   $grid->column('created_at', __('Created at'));
       // $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(EventList::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('week_id', __('Week id'));
        $show->field('event_name', __('Event name'));
        $show->field('event_id', __('Event id'));
        $show->field('event_date', __('Event date'));
        $show->field('score', __('Score'));
        $show->field('result', __('Result'));
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
        $form = new Form(new EventList());
        $form->select('week_id')->options(Week::all()->pluck('no','id'));
      //  $form->select('week_id', __('Week id'))->model(Week::all());
        $form->text('event_name', __('Event name'));
        $form->number('event_id', __('Event id'));
        $form->datetime('event_date', __('Event date'))->default(date('Y-m-d H:i:s'));
        $form->text('score', __('Score'));
        $form->number('result', __('Result'));

        return $form;
    }
}
