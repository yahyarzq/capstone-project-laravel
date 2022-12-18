<div class="modal fade" id="modal-delete">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hapus Usulan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Usulan akan dihapus!! Apakah anda yakin?&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                <form id="modal-form-delete" action="" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-default">Hapus</button>
                </form>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script>
    $('body').on('click', '#btn-item-delete', function() {

        // Get item id from data-id atribute
        //let item_id = $(this).data('id');
        // Get item url-id from data-attr atribute
        let href = $(this).attr('data-attr');
        // Set form action attributr using data from var href (above function) 
        $('#modal-form-delete').attr("action", `${href}`);

        //$('#modal-delete').modal('show');

    });
</script>
