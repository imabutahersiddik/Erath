<?php
/* Header */
require __DIR__.'/../includes/header/html.php';
require __DIR__.'/../includes/header/meta.php';
require __DIR__.'/../includes/header/css.php';
require __DIR__.'/../includes/header/scripts.php';
require __DIR__.'/../includes/header/styles.php';
require __DIR__.'/../includes/header/navbar.php';

/* Body */
require __DIR__.'/../includes/body/editor.php';
require __DIR__.'/../includes/body/modals/modal.php';
require __DIR__.'/../includes/body/modals/upfiles.php';
/* Archives format Modal */
require __DIR__.'/../includes/body/upfiles/modals/archives.php';
/* Archive format type selection modal */
require __DIR__.'/../includes/body/upfiles/archives/modals/targz.php';
/* Documents format Modal */
require __DIR__.'/../includes/body/upfiles/modals/documents.php';
/* Document format type selection modal */
require __DIR__.'/../includes/body/upfiles/documents/modals/pdf.php';
require __DIR__.'/../includes/body/preview.php';
require __DIR__.'/../includes/body/plugins.php';
/* Footer */
require __DIR__.'/../includes/footer/footer.php';