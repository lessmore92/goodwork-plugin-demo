<?php

use Illuminate\Support\Facades\Route;
use Goodwork\MailPreview\MailPreviewController;

Route::get('mails/list', [MailPreviewController::class, 'index']);

Route::get('mails/{file}', [MailPreviewController::class, 'show']);
