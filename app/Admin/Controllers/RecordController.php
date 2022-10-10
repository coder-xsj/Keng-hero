<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Record;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Admin;

class RecordController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Record(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('user_id');
            $grid->column('title')->editable(true);
            $grid->column('hero')->label(Admin::color()->primary());
            $grid->column('record');
            $grid->column('record_image')->image();
            $grid->column('remarks');
            $grid->column('created_at')->help('坑我的时间');
            $grid->column('updated_at')->sortable();
            // 开启字段选择器功能
            $grid->showColumnSelector();
            // 显示快捷编辑按钮
//            $grid->showQuickEditButton();
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
                $filter->equal('title');

            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Record(), function (Show $show) {
            $show->field('id');
            $show->field('user_id');
            $show->field('title');
            $show->field('hero');
            $show->field('record');
            $show->field('record_image');
            $show->field('remarks');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Record(), function (Form $form) {
            $form->display('id');
            $form->text('user_id');
            $form->text('title');
            $form->text('hero');
            $form->text('record');
            $form->image('record_image')->autoUpload()->removable(false);
            $form->text('remarks');
            $form->divider();
            $form->datetime('created_at')->format('YYYY-MM-DD HH:mm:ss');
            $form->datetime('updated_at')->format('YYYY-MM-DD HH:mm:ss');



        });
    }
}
