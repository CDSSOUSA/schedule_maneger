<!-- Modal add teacher -->
<div class="modal fade" id="addTeacherModal" tabindex="-1" role="dialog" aria-labelledby="addTeacherModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
          <div class="card card-plain">
            <div class="card-header pb-0 text-left">
              <h3 class="font-weight-bolder text-primary text-gradient">Professor(a) ::</h3>
              <p class="mb-0">Entre com os dados para registrar professor(a).</p>
            </div>
            <div class="card-body pb-3">
              <form role="form text-left" method="post" action="teacher/create" id="addTeacherForm">
                <span id="msgAlertError"></span>
                <div class="row">
                  <div class="col">
                    <label class="col-form-label">Nome :: <span class="error invalid-feedback" id="fieldlertErrorname"></span></label>
                    <div class="input-group mb-3">
                      <input type="text" name="name" class="form-control" onfocus="eraseAlert(['fieldlertErrorname','msgAlertError']);" id="nameTeacherAdd" placeholder="Nome" aria-label="name" aria-describedby="name">

                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label class="col-form-label">Qtde aula(s) :: <span class="error invalid-feedback" id="fieldlertErroramount"></span></label>
                    <div class="input-group mb-3">
                      <input type="number" min="1" max="45" name="amount" class="form-control" onfocus="eraseAlert('fieldlertErroramount');" id="amount" placeholder="Quantidade de aulas" value="" aria-label="amout" aria-describedby="amout">

                    </div>

                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label class="col-form-label">Cor destaque :: <span class="error invalid-feedback" id="fieldlertErrorcolor"></span></label>
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
                  <label class="col-form-label">Disciplinas :: <span class="error invalid-feedback" id="fieldlertErrordisciplines"></span></label>

                  <?php foreach ($array as $key => $item) : ?>


                    <div class="radio-toolbar" style="border-radius: 5px; margin: 3px; width:140px;">
                      <!-- <div class="form-check-inline radio-toolbar text-white" style="background-color:#2e5b8e; border-radius: 5px; margin: 5px;"> -->
                      <input class="form-check-inline" onfocus="eraseAlert('fieldlertErrordisciplines');" name="disciplines" value="<?= $item['id']; ?>" type="radio" id="flex<?= $item['id']; ?>">
                      <label class="form-check-label" for="flex<?= $item['id']; ?>">

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