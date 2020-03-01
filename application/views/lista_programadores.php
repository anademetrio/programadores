<div class="container-fluid my-3">
    <div class="card">
		<div class="card-header justify-content-between d-flex align-items-center">
            <span><?php echo $title; ?></span>
            <a href="<?php echo site_url() ?>/programadores/add" class="btn btn-success btn-sm">Adicionar Novo</a>
        </div>
        <table class="table table-stripped" id="listagem">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Experiencia</th>
                    <th scope="col">Acoes</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($programadores as $p) : ?>
                <tr>
                    <td><?php echo $p->nome; ?></td>
                    <td><?php echo $p->cargo; ?></td>
                    <td><?php echo $p->idade; ?> anos</td>
                    <td><?php echo $p->experiencia; ?> anos</td>
                    <td>
                        <a href="<?php echo site_url() ?>/programadores/editar/<?php echo $p->id?>"
                            class="btn btn-success mx-1">Editar</a>
                        <button class="btn btn-danger btn-delete" data-id="<?php echo $p->id; ?>">Excluir</button></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
