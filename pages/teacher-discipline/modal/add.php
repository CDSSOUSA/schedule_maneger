<div class="modal fade" id="addTeacherDisciplineModal" tabindex="-1" role="dialog" aria-labelledby="addTeacherDisciplineModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
          <div class="card card-plain">
            <div class="card-header pb-0 text-left">
              <h3 id="nameTeacherDisciplineAdd" class="font-weight-bolder text-primary text-gradient"></h3>
              <p class="mb-0">Entre com os dados para registrar disciplina.</p>
            </div>
            <div class="card-body pb-3">
              <form role="form text-left" method="post" action="teacDisc/create" id="addTeacherDisciplineForm">
                <input type="hidden" name="id_teacher" id="idTeac">
                <input type="hidden" name="status" value="A">
                <span id="msgAlertErrorTeacDisc"></span>
                <div class="row">
                  <div class="col">
                    <label class="col-form-label">Qtde aula(s) :: <span class="error invalid-feedback" id="fieldAlertErrorAmountTechDisc"></span></label>
                    <div class="input-group mb-3">
                      <input type="number" min="1" max="45" onfocus="eraseAlert('fieldAlertErrorAmountTechDisc');" name="amount" class="form-control" id="amountDiscipline" placeholder="Quantidade de aulas" value="" aria-label="amout" aria-describedby="amout">

                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label class="col-form-label">Cor destaque :: <span class="error invalid-feedback" id="fieldAlertErrorColorTechDisc"></span></label>
                    <div class="input-group mb-3">
                      <input type="color" name="color" class="form-control" value="#000000" title="Escolha uma cor" aria-label="color" aria-describedby="color">

                    </div>
                  </div>
                </div>
                <?php
                $array = [
                  [
                    'id' => 1,
                    'abbreviation' => 'GEO',
                    'icone' => 'icon-geografia.png'
                  ],
                  [
                    'id' => 2,
                    'abbreviation' => 'HIS',
                    'icone' => 'icon-historia.png'
                  ],
                  [
                    'id' => 3,
                    'abbreviation' => 'PORT',
                    'icone' => 'icon-portugues.png'
                  ],
                  [
                    'id' => 4,
                    'abbreviation' => 'ING',
                    'icone' => 'icon-ingles.png'
                  ],
                  [
                    'id' => 5,
                    'abbreviation' => 'MAT',
                    'icone' => 'icon-matematica.png'
                  ]
                ];
                ?>
                <div class="row" id="disciplines">
                  <label class="col-form-label">Disciplinas :: <span class="error invalid-feedback" id="fieldAlertErrorDisciplinesTechDisc"></span></label>

                  <?php foreach ($array as $key => $item) : ?>


                    <div class="radio-toolbar" style="width:140px;">
                      <!-- <div class="form-check-inline radio-toolbar text-white" style="background-color:#2e5b8e; border-radius: 5px; margin: 5px;"> -->
                      <input class="form-check-inline" onclick="eraseAlert('fieldAlertErrorDisciplinesTechDisc');" name="disciplinesTeacher" value="<?= $item['id']; ?>" type="radio" id="disciplines<?= $item['id']; ?>">
                      <label class="form-check-label" for="disciplines<?= $item['id']; ?>">

                        <div class="d-flex">
                          <div>
                            <img src="../assets/img/<?= $item['icone']; ?>" width="28px" class="me-2 border-radius-lg p-1" alt="">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm text-white font-weight-bolder"> <?= $item['abbreviation']; ?></h6>
                          </div>
                        </div>
                        <!-- <div class="rotulo"><span class="abbreviation font-weight-bold"><?php //$item->abbreviation; 
                                                                                              ?></span>
                                    <span class="icon-delete"><i class="fa fa-book" aria-hidden="true"></i>
                                    </span>
                                </div> -->

                      </label>
                    </div>
                  <?php endforeach ?>

                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-primary btn-lg btn-rounded w-100 mt-4 mb-0">Salvar</button>
                  <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Sair</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 