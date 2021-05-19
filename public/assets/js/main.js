$(document).ready(function() {
  $('.summernote').summernote({
    placeholder: "Tulis isi text ",
    height: '300px',
    codeviewFilter: true,
    codeviewIframeFilter: true,
    toolbar: [
      ['style', ['style']],
      ['font', ['bold', 'underline', 'clear']],
      ['fontname', ['fontname']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['height', ['height']]
      ['table', ['table']],
      ['insert', ['link', 'video']],
      ['view', ['fullscreen', 'codeview', 'help']],
    ],
  });
})