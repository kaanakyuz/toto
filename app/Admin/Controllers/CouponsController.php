<?php

namespace App\Admin\Controllers;

use App\Models\Coupon;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CouponsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Coupon';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Coupon());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('week_id', __('Week id'));
        $grid->column('date', __('Date'));
        $grid->column('main_coupon', __('Main coupon'));
        $grid->column('system_coupon', __('System coupon'));
        $grid->column('play_coupon', __('Play coupon'));
        $grid->column('price', __('Price'));
        $grid->column('toto_price', __('Toto price'));
        $grid->column('coupon_cost', __('Coupon cost'));
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
        $show = new Show(Coupon::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('week_id', __('Week id'));
        $show->field('date', __('Date'));
        $show->field('main_coupon', __('Main coupon'));
        $show->field('system_coupon', __('System coupon'));
        $show->field('play_coupon', __('Play coupon'));
        $show->field('price', __('Price'));
        $show->field('toto_price', __('Toto price'));
        $show->field('coupon_cost', __('Coupon cost'));
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
        $form = new Form(new Coupon());

        $form->number('user_id', __('User id'));
        $form->number('week_id', __('Week id'));
        $form->datetime('date', __('Date'))->default(date('Y-m-d H:i:s'));
        $form->textarea('main_coupon', __('Main coupon'));
        $form->textarea('system_coupon', __('System coupon'));
        $form->textarea('play_coupon', __('Play coupon'));
        $form->decimal('price', __('Price'));
        $form->decimal('toto_price', __('Toto price'));
        $form->number('coupon_cost', __('Coupon cost'));

        return $form;
    }
}
