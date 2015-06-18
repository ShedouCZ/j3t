// MODULE summernote
if ($().summernote) $('textarea[data-provide=wysiwyg]').summernote({
        lang: 'cs-CZ',
        height: 180,
        toolbar: [
                ['css', ['style']],
                ['style', ['bold', 'italic', 'underline', 'clear']],
        //      ['font', ['strikethrough', 'superscript', 'subscript', 'height']],
                ['para', ['ul', 'ol', 'paragraph', 'height']],
                ['insert', ['link', 'hr', 'table']],
                ['misc', ['codeview', 'fullscreen']],
                ['help', ['help']],
        ]
});

// MODULE sortable
$('.list-group').each(function (i,e) {
    var id = e.id;
    var $e = $(e);
    Sortable.create(document.getElementById(id), {
        handle: '.glyphicon-move',
        animation: 150,
        // dragging ended
        onEnd: function (/**Event*/ e) {
            var data = $e.find('[data-item-id]').map(function (i,v) {
                return {
                    'id': $(v).data('item-id'),
                    'ord': i
                };
            }).toArray();
            var url = $e.data('reorder-url') || window.location.href;
            $.post(url, {data:data});
        }
    });
});
