<?php

namespace App\Admin\Controllers\User;

use App\Models\News;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NewsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'News';

    const ENABLED_SWITCH = [
        'on'  => ['value' => 1, 'text' => '開', 'color' => 'success'],
        'off' => ['value' => 0, 'text' => '關', 'color' => 'default'],
    ];

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new News());

        $grid->model()
            ->orderBy('art_date', 'DESC')
            ->orderBy('created_at', 'ASC');

        $grid->column('id', __('編號'));
        $grid->column('title', __('標題'));
        $grid->column('art_date', __('發布日期'));
        $grid->column('enabled', __('啟用'))->switch(self::ENABLED_SWITCH);
        $grid->column('created_at', __('建立時間'));

        $grid->filter(function($filter){
            $filter->disableIdFilter();

            $filter->like('title', __('標題'));
        });

        $grid->actions(function($actions){
            $actions->disableView();
        });

//        $grid->disableActions();
        $grid->disableBatchActions();
//        $grid->disableCreateButton();
        $grid->disableExport();
        $grid->disableColumnSelector();
//        $grid->disablePagination();

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
        $show = new Show(News::findOrFail($id));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new News());

        $hash = sha1(now());
        $path = substr($hash, 0, 3) . '/' . substr($hash, 3, 3) . '/' . substr($hash, 6, 3);

        $form->image('pic', __('代表圖'))->name(function ($file) use ($hash) {
            return $hash . '.' . $file->guessExtension();
        })->move($path);
        $form->text('title', __('標題'))->required();
        $form->date('art_date', __('發佈日期'))->required();
        $form->text('tag', __('標籤'));
        $form->froalaEditor('content', __('內容'));
        $form->switch('enabled', '')->states(self::ENABLED_SWITCH);

        $form->disableEditingCheck();
        $form->disableViewCheck();
        $form->disableCreatingCheck();

        $form->tools(function (Form\Tools $tools) {
            $tools->disableList();
            $tools->disableDelete();
            $tools->disableView();
            $tools->disableDelete();
        });

        $form->footer(function ($footer) {
            $footer->disableReset();
        });

        return $form;
    }
}
