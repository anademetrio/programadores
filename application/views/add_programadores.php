<div class="container-fluid my-5">
    <div class="alert" role="alert"></div>
    <h1 class="title"><?php echo $title; ?></h1>
    <form class="w-50" method="post" onsubmit="addProgramador(); return false;" id="novoprogramador">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" required>
        </div>
        <div class="form-group">
            <label>Idade</label>
            <input type="number" value="0" min="0" max="100" class="form-control" name="idade">
        </div>
        <div class="form-group">
            <label>Cidade</label>
            <input type="text" class="form-control" name="cidade">
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label>Cargo</label>
            <select class="form-control" required name="cargo">
                <option value="">Selecione...</option>
                <?php foreach ($cargos as $c ): ?>
                <option value="<?php echo $c->id; ?>"><?php echo $c->cargo; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Experiencia</label>
            <input type="number" value="0" min="0" max="99" class="form-control" name="experiencia">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
