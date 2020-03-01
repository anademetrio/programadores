<div class="container-fluid my-3">
    <div class="card">
        <div class="card-header justify-content-between d-flex align-items-center">
            <span><?php echo $title; ?></span>
            <button data-toggle="modal" data-target="#novocargo" class="btn btn-success btn-sm"
                id="modalcargo">Adicionar Novo</button>
        </div>
        <table class="table table-stripped" id="cargos">
            <thead>
                <tr>
                    <th scope="col">Cargo</th>
                    <th scope="col">Acoes</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cargos as $c) : ?>
                <tr>
                    <td><?php echo $c->cargo; ?></td>
                    <td>
                        <button onclick="editar(<?php echo $c->id?>,'<?php echo $c->cargo?>')"
                            class="btn btn-success mx-1">Editar</button>
                        <button class="btn btn-danger" onclick="apagarCargo(<?php echo $c->id?>)">Excluir</button></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="novocargo">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Novo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Cargo</label>
                    <input type="hidden" name="id">
                    <input type="text" class="form-control" name="cargo">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="salvarCargo()">Salvar</button>
            </div>
        </div>
    </div>
</div>
