<?php

/**
 * Returns the importmap for this application.
 *
 * - "path" is a path inside the asset mapper system. Use the
 *     "debug:asset-map" command to see the full list of paths.
 *
 * - "entrypoint" (JavaScript only) set to true for any module that will
 *     be used as an "entrypoint" (and passed to the importmap() Twig function).
 *
 * The "importmap:require" command can be used to add new entries to this file.
 */
return [
    'app' => [
        'path' => './assets/app.js',
        'entrypoint' => true,
    ],
    'admin' => [
        'path' => './assets/admin.js',
        'entrypoint' => true,
    ],
    '@hotwired/stimulus' => [
        'version' => '3.2.2',
    ],
    'bootstrap/js/dist/alert' => [
        'version' => '4.6.2',
    ],
    'bootstrap/dist/css/bootstrap.min.css' => [
        'version' => '4.6.2',
        'type' => 'css',
    ],
    'jquery' => [
        'version' => '3.7.1',
    ],
    'highlight.js/lib/core' => [
        'version' => '11.9.0',
    ],
    'highlight.js/lib/languages/php' => [
        'version' => '11.9.0',
    ],
    'highlight.js/lib/languages/twig' => [
        'version' => '11.9.0',
    ],
    '@symfony/stimulus-bundle' => [
        'path' => './vendor/symfony/stimulus-bundle/assets/dist/loader.js',
    ],
    'flatpickr' => [
        'version' => '4.6.13',
    ],
    'flatpickr/dist/l10n' => [
        'version' => '4.6.13',
    ],
    'flatpickr/dist/flatpickr.min.css' => [
        'version' => '4.6.13',
        'type' => 'css',
    ],
    'bootstrap/js/dist/collapse' => [
        'version' => '4.6.2',
    ],
    'bootstrap/js/dist/dropdown' => [
        'version' => '4.6.2',
    ],
    'bootstrap/js/dist/tab' => [
        'version' => '4.6.2',
    ],
    'bootstrap/js/dist/modal' => [
        'version' => '4.6.2',
    ],
    'highlight.js/styles/github-dark-dimmed.css' => [
        'version' => '11.9.0',
        'type' => 'css',
    ],
    'lato-font/css/lato-font.css' => [
        'version' => '3.0.0',
        'type' => 'css',
    ],
    'popper.js' => [
        'version' => '1.16.1',
    ],
    'typeahead.js' => [
        'version' => '0.11.1',
    ],
    'bloodhound-js' => [
        'version' => '1.2.3',
    ],
    'object-assign' => [
        'version' => '4.1.1',
    ],
    'es6-promise' => [
        'version' => '3.3.1',
    ],
    'storage2' => [
        'version' => '0.1.2',
    ],
    'superagent' => [
        'version' => '3.8.3',
    ],
    'component-emitter' => [
        'version' => '1.3.1',
    ],
    'bootstrap-tagsinput' => [
        'version' => '0.7.1',
    ],
    '@symfony/ux-live-component' => [
        'path' => './vendor/symfony/ux-live-component/assets/dist/live_controller.js',
    ],
    'filepond' => [
        'version' => '4.31.4',
    ],
    'filepond/dist/filepond.min.css' => [
        'version' => '4.31.4',
        'type' => 'css',
    ],
    'filepond-plugin-file-encode' => [
        'version' => '2.1.14',
    ],
    'filepond-plugin-file-metadata' => [
        'version' => '1.0.8',
    ],
    'filepond-plugin-file-poster' => [
        'version' => '2.5.1',
    ],
    'filepond-plugin-file-poster/dist/filepond-plugin-file-poster.css' => [
        'version' => '2.5.1',
        'type' => 'css',
    ],
    'filepond-plugin-file-validate-size' => [
        'version' => '2.2.8',
    ],
    'filepond-plugin-file-validate-type' => [
        'version' => '1.2.9',
    ],
    'filepond-plugin-image-crop' => [
        'version' => '2.0.6',
    ],
    'filepond-plugin-image-edit' => [
        'version' => '1.6.3',
    ],
    'filepond-plugin-image-edit/dist/filepond-plugin-image-edit.css' => [
        'version' => '1.6.3',
        'type' => 'css',
    ],
    'filepond-plugin-image-exif-orientation' => [
        'version' => '1.0.11',
    ],
    'filepond-plugin-image-preview' => [
        'version' => '4.6.12',
    ],
    'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css' => [
        'version' => '4.6.12',
        'type' => 'css',
    ],
    'filepond-plugin-image-resize' => [
        'version' => '2.0.10',
    ],
    'filepond-plugin-image-transform' => [
        'version' => '3.8.7',
    ],
    'filepond-plugin-image-validate-size' => [
        'version' => '1.2.7',
    ],
    'filepond/locale/ar-ar.js' => [
        'version' => '4.31.4',
    ],
    'filepond/locale/cs-cz.js' => [
        'version' => '4.31.4',
    ],
    'filepond/locale/da-dk.js' => [
        'version' => '4.31.4',
    ],
    'filepond/locale/de-de.js' => [
        'version' => '4.31.4',
    ],
    'filepond/locale/el-el.js' => [
        'version' => '4.31.4',
    ],
    'filepond/locale/en-en.js' => [
        'version' => '4.31.4',
    ],
    'filepond/locale/es-es.js' => [
        'version' => '4.31.4',
    ],
    'filepond/locale/fa_ir.js' => [
        'version' => '4.31.4',
    ],
    'filepond/locale/fi-fi.js' => [
        'version' => '4.31.4',
    ],
    'filepond/locale/fr-fr.js' => [
        'version' => '4.31.4',
    ],
    'filepond/locale/he-he.js' => [
        'version' => '4.31.4',
    ],
    'filepond/locale/hr-hr.js' => [
        'version' => '4.31.4',
    ],
    'filepond/locale/hu-hu.js' => [
        'version' => '4.31.4',
    ],
    'filepond/locale/id-id.js' => [
        'version' => '4.31.4',
    ],
    'filepond/locale/it-it.js' => [
        'version' => '4.31.4',
    ],
    'filepond/locale/ja-ja.js' => [
        'version' => '4.31.4',
    ],
    'filepond/locale/lt-lt.js' => [
        'version' => '4.31.4',
    ],
    'filepond/locale/nl-nl.js' => [
        'version' => '4.31.4',
    ],
    'filepond/locale/no_nb.js' => [
        'version' => '4.31.4',
    ],
    'filepond/locale/pl-pl.js' => [
        'version' => '4.31.4',
    ],
    'filepond/locale/pt-br.js' => [
        'version' => '4.31.4',
    ],
    'filepond/locale/ro-ro.js' => [
        'version' => '4.31.4',
    ],
    'filepond/locale/ru-ru.js' => [
        'version' => '4.31.4',
    ],
    'filepond/locale/sk-sk.js' => [
        'version' => '4.31.4',
    ],
    'filepond/locale/sv_se.js' => [
        'version' => '4.31.4',
    ],
    'filepond/locale/tr-tr.js' => [
        'version' => '4.31.4',
    ],
    'filepond/locale/uk-ua.js' => [
        'version' => '4.31.4',
    ],
    'filepond/locale/vi-vi.js' => [
        'version' => '4.31.4',
    ],
    'filepond/locale/zh-cn.js' => [
        'version' => '4.31.4',
    ],
    'filepond/locale/zh-tw.js' => [
        'version' => '4.31.4',
    ],
];
