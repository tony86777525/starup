<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Story;
use Carbon\Carbon;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Widgets\InfoBox;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('首頁')
            ->description('')
            ->row(function (Row $row) {
                $row->column(3, function (Column $column) {
                    $orderCount = News::where('enabled', 1)->count();
                    $column->append(new InfoBox('news', 'book', 'maroon', '/' . config('admin.route.prefix') . '/news', $orderCount));
                });
                $row->column(3, function (Column $column) {
                    $orderCount = Story::where('enabled', 1)->count();
                    $column->append(new InfoBox('Story', 'book', 'purple', '/' . config('admin.route.prefix') . '/stories', $orderCount));
                });
            });
    }
}
