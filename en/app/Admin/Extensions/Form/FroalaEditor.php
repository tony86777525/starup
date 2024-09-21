<?php

namespace App\Admin\Extensions\Form;

use Encore\Admin\Form\Field;

class FroalaEditor extends Field
{
    public static $js = [
        '/assets/js/packages/froala_editor/froala_editor.min.js',
        '/assets/js/packages/froala_editor/froala_editor.pkgd.min.js',
        '/assets/js/packages/froala_editor/zh_tw.js',
    ];

    public static $css = [
        '/assets/js/packages/froala_editor/froala_editor.pkgd.min.css',
        '/assets/js/packages/froala_editor/froala_style.min.css',
        '/assets/js/packages/froala_editor/froala_editor.min.css',
    ];

    protected $view = 'admin.froala-editor';

    public function render()
    {
        $url = '/en/' . env('ADMIN_ROUTE_PREFIX', 'admin') . '/froala-editor/upload';

        $this->script = "$('textarea').froalaEditor(
            {
                toolbarButtons: ['paragraphFormat','paragraphStyle','quote','fontSize','bold','italic','align','formatOL','formatUL','insertTable','insertLink','insertImage','insertVideo','insertAudio','insertFile','insertHR','fullscreen','html'],
                language: 'zh_tw',
                imageUploadURL: '$url',
                placeholderText: '開始編輯...',
                charCounterCount: false,
                requestHeaders: {
                    'X-CSRF-TOKEN': $('meta[name=\"csrf-token\"]').attr('content'),
                    'X-Requested-With': 'XMLHttpRequest'
                }
            }
        );";

        return parent::render();
    }
}
