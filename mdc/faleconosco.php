<!-- Header-->
<?php include_once 'php/includes/header.php';?>

<!-- Conteúdo da pagina -->
<section>
    <div class="mb-4">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="card shadow-sm px-sm-4 py-2 mb-5 bg-light">

                <div class="card-body">

                    <div class="h1 text-center">Fale conosco</div>
                        <form>

                            <div class="mb-3">
                                <label class="form-label" for="email">E-mail:</label>
                                <input type="email" class="form-control" id="email" aria-describedby="ajudaEmail" placeholder="Seu email" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="telefone">Telefone:</label>
                                <input type="tel" class="form-control" id="telefone" placeholder="Seu telefone" minlength="8" maxlength="11" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="assunto">Assunto:</label>
                                <select class="form-select" name="assunto" id="assunto" required>
                                    <option value="">Selecione um assunto</option>
                                    <option value="calendario">Calendário</option>
                                    <option value="horarios">Horários</option>
                                    <option value="mapa">Mapa</option>
                                    <option value="rod">ROD</option>
                                    <option value="critica">Crítica/Reclamação</option>
                                    <option value="outro">Outro</option>
                                </select>
                            </div>

                            <div class="mb-2">
                                <label class="form-label" for="texto">Escreva sua mensagem:</label><br>
                                <textarea class="w-100" id="texto" name="texto" required rows="6"></textarea>
                            </div>

                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include_once 'php/includes/footer.php';?>