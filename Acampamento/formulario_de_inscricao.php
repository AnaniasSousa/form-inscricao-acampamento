<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'vars.php'; echo $header; ?>
    <title>Inscrição - Preencha o Formulário</title>
</head>
<body>
<!--NAVBAR[0K]-->
        
        <?php include 'vars.php'; echo $menu; ?>
<!--INTRO-->
    
    <div>
        <h1>FORMULÁRIO DE INSCRIÇÃO</h1>
            <p>
                Dolor eu in proident et aute elit laboris consequat sit eiusmod ullamco cupidatat incididunt ullamco veniam non dolore culpa anim nostrud id ut cupidatat occaecat in ut pariatur sed aliquip excepteur aliqua ut nisi duis eu consequat voluptate dolor deserunt officia dolor in sed ea enim exercitation officia dolore.
            </p>
    </div>
<!--FORMULÁRIO-->
    <div class="col-md-10 order-md-1">
    <form method="POST" action="inscricao_confirmada.php" class="needs-validation" novalidate="">
        <h4>DADOS PESSOAIS*</h4>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="nome_usr">NOME</label>
                    <input class="form-control" type="text" placeholder="Ex: Jesus" name="nome_usr" id="nome_usr" required />
                    <div class="invalid-feedback">Quem es tú?!</div>
                </div>
                
                <label>SOBRENOME</label>
                <input class="form-control" type="text" placeholder="Ex: Jesus" name="sobrenome_usr" id="sobrenome_usr" required />
                
                <label>DATA DE NASCIMENTO:</label>
                <input class="form-control" type="date" name="born_usr" id="born_usr" required />
            </div>
            <div>
                <label>SEXO</label>
                <input class="form-control" type="radio" value="M" name="sexo" id="sexo" />
                <label>Masculino</label>
                <input class="form-control" type="radio" value="F" name="sexo" id="sexo" checked />
                <label>Feminino</label>
                <label>FOTO DO ACAMPANTE</label>
                <input type="hidden" name="MAX_FILE_SIZE" value="99999999">
                    <div><input class="form-control" type="file" accept="image" name="foto_de_perfil" id="foto_de_perfil" required /></div>
            </div>
            <div>
                <label>AUTORIZAÇÃO -18</label>
                <input class="form-control" type="file" accept="image/" name="autorizacao_menor" id="autorizacao_menor" />
            </div>
        </fieldset>

        <fieldset>
            <h4>CONTATO*</h4>
            <div>
                <label>TELEFONE</label>
                <input class="form-control" type="tel" placeholder="(DD) 9 9999-9999" pattern="\([0-9]{2}\)[\s][9][\s][0-9]{4}-[0-9]{4}" name="tel_usr" id="tel_usr" required />
                <label>E-MAIL</label>
                <input class="form-control" type="email"  placeholder="jesus@holemail.com" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" name="mail_usr" id="mail_usr" required />
            </div>
            <div>
                <label>RUA/AV./BECO</label>
                <input class="form-control" type="text" name="rua_end_usr" id="rua_end_usr" required />
                <label>NÚMERO</label>
                <input class="form-control" type="number" min="1" max="9999" placeholder="123" name="num_end_usr" id="num_end_usr" required />
                <label>BAIRRO</label>
                <input class="form-control" type="text" name="bair_end_usr" id="bair_end_usr" required />
            </div>

            <div>
                <label>COMPLEMENTO</label>
                <input class="form-control" type="text" name="compl_end_usr" id="compl_end_usr" />
                <label>CIDADE</label>
                <select class="form-control" name="cid_end_usr" id="cid_end_usr" required>
                    <option value="CONT">Contagem</option>
                    <option value="BH">Belo Horizonte</option>
                    <option value="BET">Betim</option>
                    <option value="BRUM">Brumadinho</option>
                    <option value="IBT">Ibirite</option>
                    <option value="SARZ">Sarzedo</option>
                    <option value="OUTR">Outros</option>
                </select>
            </div>
        </fieldset>
        <fieldset>
            <h4>FICHA MÉDICA*</h4>
            <div>
                <div>
                    <label>FAZ USO DE ALGUM MÉDICAMENTO?</label>
                        <input type="radio" value="S" name="uso_medicamento" id="uso_medicamento" checked />
                        <label>Sim</label>
                        <input type="radio" value="N" name="uso_medicamento" id="uso_medicamento" />
                        <label>Não</label>
                    <label>SE SIM, QUAL?</label>
                        <input type="text" name="nome_medicamento_uso" id="nome_medicamento_uso" />
                    <label>QUAL HORÁRIO?</label>
                        <input type="text" name="harario_medicamento_uso" id="harario_medicamento_uso" />   
                </div>
                <div>
                    <label>TEM ALERGIA A MÉDICAMENTO?</label>
                        <input type="radio" value="S" name="alergico_a_medicamento" id="alergico_a_medicamento" checked />
                        <label>Sim</label>
                        <input type="radio" value="N" name="alergico_a_medicamento" id="alergico_a_medicamento" />
                        <label>Não</label>
                    <label>SE SIM, QUAL?</label>
                        <input type="text" name="nome_medicamento_alergico" id="nome_medicamento_alergico" />
                </div>
                <div>
                    <label>TEM ALERGIA A ALIMENTO?</label>
                        <input type="radio" value="S" name="alergico_a_alimento" id="alergico_a_alimento" checked />
                        <label>Sim</label>
                        <input type="radio" value="N" name="alergico_a_alimento" id="alergico_a_alimento" />
                        <label>Não</label>
                    <label>SE SIM, QUAL?</label>
                        <input type="text" name="nome_alimento_alergico" id="nome_alimento_alergico" />
                </div>
                <div>
                    <label>TEM ALGUMA FOBIA?</label>
                        <input type="radio" value="S" name="tenho_fobia" id="tenho_fobia" checked />
                        <label>Sim</label>
                        <input type="radio" value="N" name="tenho_fobia" id="tenho_fobia" />
                        <label>Não</label>
                    <label>SE SIM, QUAL?</label>
                        <input type="text" name="nome_fobia" id="nome_fobia" />
                </div>
            </div>    
        </fieldset>
        <fieldset>
            <h4>FORMA DE PAGAMENTO</h4>
            <div>
                <p>
                    Deserunt enim est nisi exercitation commodo labore ullamco id id mollit ut in duis elit quis commodo proident. Laboris mollit commodo cillum quis fugiat elit culpa exercitation deserunt nulla laborum exercitation in.
                </p>
            </div>
            <div>
                <input class="form-control" type="radio" value="1" name="forma_de_pagamento" id="forma_de_pagamento" checked />
                <label>1x R$ 130,00</label>
            </div>
            <div>    
                <input class="form-control" type="radio" value="2" name="forma_de_pagamento" id="forma_de_pagamento" />
                <label>2x R$ 65,00</label>
            </div>
            <div>    
                <input class="form-control" type="radio" value="3" name="forma_de_pagamento" id="forma_de_pagamento" />
                <label>3x R$ 14,44</label>
            </div>
        </fieldset>
        <fieldset>
            <h4>Conta pra Gente</h4>
            <div>
                <label>O que você espera do acampamento?</label>
                <textarea class="form-control" placeholder="Eis que vos digo, e dele receberemos tudo que pedirmos, pois lhe obedecemos e fazemos o que lhe agrada.
    1João 3:22 NVT" maxlength="250" name="fedback" id="fedback" required></textarea>
            </div>

            <div>
                <input class="form-control" type="checkbox" checked name="mailin_acamps_2018_even" id="mailin_acamps_2018_even" value="aceito" />
                <label>Desejo receber informações sobre o acampamento por e-mail</label>
            </div>

            <div>
                <input class="form-control" type="checkbox" name="li_o_termo" id="li_o_termo" value="baixei" required>
                <label>Li, baixei e assinei o termo de responsabilidade.</label>
            </div>
        </fieldset>
        <div>
            <input class="form-control" type="submit" value="Enviar" />
        </div>
    </form>
    </div>
<?php include 'vars.php'; echo $js; ?>
</body>
</html>