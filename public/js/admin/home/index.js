let table = $('#page_table_slider').DataTable({
    serverSide: true,
    ajax: `${root}/slider/get-list`,
    bSort: true,
    order: [],
    destroy: true,
    columns: [
        { data: "order" },
        { data: "image"},
        { data: "content" },
        { data: 'actions', name: 'actions', orderable: false, searchable: false }
    ],
    language: {
        url: "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json",
    }, 
});

function dataSliderContent(content)
{
    let form = document.getElementById('form-update-slider')
    form.querySelector('input[name="id"]').value = content.id
    form.querySelector('input[name="order"]').value = content.order
    form.querySelector('input[name="content_1"]').value = content.content_1
    form.querySelector('input[name="content_2"]').value = content.content_2
    CKEDITOR.instances['content_3'].setData(content.content_3) 
}

