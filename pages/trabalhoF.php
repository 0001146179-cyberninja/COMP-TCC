<?php session_start(); ?>
<?php include '../php/setupConfig.php' ?>
<?php include '../views/header.php' ?>
<?php include '../views/navbar.php'?>
<link rel="stylesheet" href="../assets/style/trabalhof.css">
<link rel="stylesheet" href="../assets/style/style.css">


<main class="main-container">
    
    <aside class="info-card">
        <h2>Por que ser contratar algum serviço</h2>
        
        <div class="item">
            <div class="icon"></div>
            <div class="text">
                <h3>Realização do trabalho</h3>
                <p>Todos os serviços oferecidos seram feitos por profissionais especializados naquela determinada maquina ou serviço.</p>
            </div>
        </div>

        <div class="item">
            <div class="icon"></div>
            <div class="text">
                <h3>Confiança e responsabilidade</h3>
                <p>Nosso site verifica informações sobre a documentação de cada maquina e/ou o prestador de serviço</p>
            </div>
        </div>

        <div class="item">
            <div class="icon"></div>
            <div class="text">
                <h3>Suporte Logístico</h3>
                <p>Auxiliamos 24hr para duvidas, e na dificuldade de transporte da maquina.</p>
            </div>
        </div>
    </aside>

    <section class="form-card">
        <h2>Formulário de Credenciamento</h2>
        <p>Preencha os dados abaixo com as suas informações e do seu maquinário. Nossa equipe de logística entrará em contato.</p>
        
        <form action="processa.php" method="POST" enctype="multipart/form-data">
            <div class="form-grid">
                
                <div class="form-group">
                    <label for="nome">Nome Completo</label>
                    <input type="text" id="nome" name="nome" placeholder="Ex: João da Silva" required>
                </div>

                <div class="form-group">
                    <label for="documento">CPF </label>
                    <input type="text" id="documento" name="documento" placeholder="000.000.000-00" required>
                </div>

                <div class="form-group">
                    <label for="email">E-mail de Contato</label>
                    <input type="email" id="email" name="email" placeholder="seu-email@dominio.com" required>
                </div>

                <div class="form-group">
                    <label for="telefone">Telefone / WhatsApp</label>
                    <input type="tel" id="telefone" name="telefone" placeholder="(11) 99999-9999" required>
                </div>

                <div class="form-group">
                    <label for="tipo-maquina">Tipo de Máquina Principal</label>
                    <select id="tipo-maquina" name="tipo-maquina" required>
                        <option value="" disabled selected>Selecione uma opção</option>
                      <option value="escavadeira">Escavadeira Hidráulica</option>
<option value="retroescavadeira">Retroescavadeira</option>
                 <option value="motoniveladora">Motoniveladora (Patrol)</option>
<option value="trator-esteira">Trator de Esteira</option>
                       <option value="caminhao-basculante">Caminhão Basculante / Caçamba</option>
                <option value="operador-avulso">Não tenho máquina (Apenas Operador)</option>
                    </select>
              </div>

                <div class="form-group">
                   <label for="marca-modelo">Marca e Modelo do Equipamento</label>
<input type="text" id="marca-modelo" name="marca-modelo" placeholder="Ex: Caterpillar 320D, Komatsu PC200">
             </div>

              <div class="form-group">
                    <label for="ano-maquina">Ano de Fabricação</label>
                <input type="number" id="ano-maquina" name="ano-maquina" min="1990" max="2027" placeholder="Ex: 2018">
               </div>
             <div class="form-group">
                    <label for="disponibilidade">Região de Disponibilidade</label>
                  <select id="disponibilidade" name="disponibilidade" required>
                        <option value="" disabled selected>Onde você pode operar?</option>
                      <option value="nacional">Disponibilidade Nacional</option>
                       <option value="sudeste">Apenas Região Sudeste</option>
                        <option value="sul">Apenas Região Sul</option>
                       <option value="nordeste">Apenas Região Nordeste</option>
                      <option value="centro-oeste">Apenas Região Centro-Oeste</option>
                    <option value="norte">Apenas Região Norte</option>
                   </select>
            </div>

                <div class="form-group full-width">
              <label for="detalhes">Descrição do Serviço e Acessórios (Opcional)</label>
                    <textarea id="detalhes" name="detalhes" rows="4" placeholder="Fale sobre sua experiência, se possui operador próprio, se a máquina tem rompedor, caçamba extra, etc."></textarea>
                </div>

          <div class="form-group full-width">
            <label>Foto da Máquina / Certificação do Operador</label>
              <label for="arquivos" class="file-dropzone">
             <p><strong>Clique aqui</strong> para anexar imagem ou documento (PDF, JPG, PNG)</p>
                        <span style="font-size: 0.8rem; color: #777777;">Máximo de 10MB</span>
                       <input type="file" id="arquivos" name="arquivos[]" multiple style="display: none;">
                  </label>
          </div>
              <div class="full-width">
              <button type="submit" class="btn-submit">Enviar Proposta de Serviço</button>
              </div>

      </div>
   </form>
    </section>
</main>

<?php include '../views/footer.php'?>