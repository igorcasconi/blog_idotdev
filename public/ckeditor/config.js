/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	config.language = 'pt-br';
	config.uiColor = '#3b7aa6';
    // config.extraPlugins = 'imageuploader';
    config.removePlugins = 'save';
    config.filebrowserUploadUrl = "{{route('upload', ['_token' => csrf_token() ])}}";
    config.filebrowserUploadMethod = 'form';

};
