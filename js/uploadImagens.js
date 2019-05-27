window.onload = function(){

  'use strict';

  alert('onload funciona');

var isAdvancedUpload = function() {
  var div = document.createElement('div');
  return (('draggable' in div) || ('ondragstart' in div && 'ondrop' in div)) && 'FormData' in window && 'FileReader' in window;
}();

var $form = $('.box');

if (isAdvancedUpload) {
  $form.addClass('has-advanced-upload');
}


if (isAdvancedUpload) {

  var droppedFiles = false;

  $form.on('drag dragstart dragend dragover dragenter dragleave drop', function(e) {
    e.preventDefault();
    e.stopPropagation();
  })
  .on('dragover dragenter', function() {
    $form.addClass('is-dragover');
  })
  .on('dragleave dragend drop', function() {
    $form.removeClass('is-dragover');
  })
  .on('drop', function(e) {
    droppedFiles = e.originalEvent.dataTransfer.files;
  });

}


$form.on('submit', function(e) {
  if ($form.hasClass('is-uploading')) return false;

  $form.addClass('is-uploading').removeClass('is-error');

  if (isAdvancedUpload) {
    // ajax for modern browsers
    if (isAdvancedUpload) {
  e.preventDefault();

  var ajaxData = new FormData($form.get(0));

  if (droppedFiles) {
    $.each( droppedFiles, function(i, file) {
      ajaxData.append( $input.attr('name'), file );
    });
  }

  $.ajax({
    url: $form.attr('action'),
    type: $form.attr('method'),
    data: ajaxData,
    dataType: 'json',
    cache: false,
    contentType: false,
    processData: false,
    complete: function() {
      $form.removeClass('is-uploading');
    },
    success: function(data) {
      $form.addClass( data.success == true ? 'is-success' : 'is-error' );
      if (!data.success) $errorMsg.text(data.error);
    },
    error: function() {
      // Log the error, show an alert, whatever works for you
    }
  });
}


  } else {
    // ajax for legacy browsers
  }
});

var $input    = $form.find('input[type="file"]'),
    $label    = $form.find('label'),
    $box    = $form.find('div[class=""]'),
    showFiles = function(files) {
      $label.text(files.length > 1 ? ($input.attr('data-multiple-caption') || '').replace( '{count}', files.length ) : files[ 0 ].name);
    };

// ...
$label.on('drop', function(e) {
  droppedFiles = e.originalEvent.dataTransfer.files; // the files that were dropped
  showFiles( droppedFiles );
});

$input.on('drop', function(e) {
  droppedFiles = e.originalEvent.dataTransfer.files; // the files that were dropped
  showFiles( droppedFiles );
});

//...

$input.on('change', function(e) {
  showFiles(e.target.files);
});
}
