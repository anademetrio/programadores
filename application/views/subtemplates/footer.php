<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#listagem').DataTable();
});


$(document).on('click', '.btn-delete', function(e) {
    e.preventDefault();
    var r = confirm("Tem certeza que deseja excluir este registro?");
    if (r) {
        var id = $(this).attr('data-id');
        $.ajax({
            url: "<?php echo site_url() ?>/programadores/apagar/" + id,
            type: "GET",
            dataType: "json",
            success: function(res) {
                console.log(res);
                if (res.success) {
					location.reload();
				} else {}
            }
        })
    }
});

$("#modalcargo").click(function(e) {
    e.preventDefault();
    $('input[name=cargo]').val("");
    $('input[name=id]').val("");
});

function addProgramador() {

    var dados = $('#novoprogramador').serialize();
    console.log(dados);
    $.ajax({
        url: "<?php echo site_url() ?>/programadores/salvar",
        type: "POST",
        dataType: "json",
        data: dados,
        success: function(res) {
            console.log(res);
            if (res.success) {
                $('.alert').html(res.success);
                $('.alert').removeClass('alert-danger').addClass('alert-success');
                $('#novoprogramador')[0].reset();
            } else {
                $('.alert').html(res.success);
                $('.alert').removeClass('alert-success').addClass('alert-danger');
            }
        }
    })
}

function salvarCargo() {

    var cargo = $('input[name=cargo]').val();
    var id = $('input[name=id]').val();
    $.ajax({
        url: "<?php echo site_url() ?>/cargos/salvar",
        type: "POST",
        dataType: "json",
        data: {
            'cargo': cargo,
            'id': id
        },
        success: function(res) {
            console.log(res);
            if (res.success) {
                $('.alert').html(res.success);
                $('.alert').removeClass('alert-danger').addClass('alert-success');
                $('input[name=cargo]').val("");
                $('input[name=id]').val("");
                location.reload();
            } else {
                $('.alert').html(res.success);
                $('.alert').removeClass('alert-success').addClass('alert-danger');
            }
        }
    })
}

function editar(id, cargo) {
    console.log(id);
    $('input[name=cargo]').val(cargo);
    $('input[name=id]').val(id);
    $('#novocargo').modal('show');
}

function apagarCargo(id) {
    var r = confirm("Tem certeza que deseja excluir este registro?");
    if (r) {
        $.ajax({
            url: "<?php echo site_url() ?>/cargos/apagar/" + id,
            dataType: "json",
            success: function(res) {
                if (res.success) {
                    location.reload();
                }
            }
        });
    }

}
</script>
</body>

</html>
