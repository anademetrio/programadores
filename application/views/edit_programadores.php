<div class="container-fluid my-5">
    <div class="alert" role="alert"></div>
    <h1 class="title"><?php echo $title; ?></h1>
    <?php foreach ($programador as $p ): ?>
    <form class="w-50" method="post" onsubmit="editProgramador(); return false;" id="editarprogramador">
        <input type="hidden" value="<?php echo $p->id; ?>" name="id">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" value="<?php echo $p->nome; ?>" class="form-control" name="nome" required>
        </div>
        <div class="form-group">
            <label>Idade</label>
            <input type="number" value="<?php echo $p->idade; ?>" min="0" max="100" class="form-control" name="idade">
        </div>
        <div class="form-group">
            <label>Cidade</label>
            <input type="text" value="<?php echo $p->cidade; ?>" class="form-control" name="cidade">
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input type="email" value="<?php echo $p->email; ?>" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label>Cargo</label>
            <select class="form-control" required name="cargo">
                <option value="">Selecione...</option>
                <?php foreach ($cargos as $c ): ?>
                <?php if($c->id == $p->cargo) { ?>
                <option value="<?php echo $c->id; ?>" selected><?php echo $c->cargo; ?></option>
                <?php } else { ?>
                <option value="<?php echo $c->id; ?>"><?php echo $c->cargo; ?></option>
                <?php } ?>

                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Experiencia</label>
            <input type="number" value="<?php echo $p->experiencia; ?>" min="0" max="99" class="form-control"
                name="experiencia">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
    <?php endforeach; ?>

</div>
<script>
function editProgramador() {

    var dados = $('#editarprogramador').serialize();
    console.log(dados);
    $.ajax({
        url: "../salvar",
        type: "POST",
        dataType: "json",
        data: dados,
        success: function(res) {
            console.log(res);
            if (res.success) {
                $('.alert').html(res.success);
                $('.alert').removeClass('alert-danger').addClass('alert-success');
            } else {
                $('.alert').html(res.success);
                $('.alert').removeClass('alert-success').addClass('alert-danger');
            }
        }
    })
}
</script>
