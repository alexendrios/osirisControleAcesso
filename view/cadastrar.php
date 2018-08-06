<?php
 include ('../service/verificaSessao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro de Semhas</title>

        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/blocos.css"/>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/estilho_thommy.css"/>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css"/>
    </head>
    <body>
        <form class="form-horizontal" method="post" action="../service/cadastro.php" >
            <!--Cadastro -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h2>Cadastrar</h2></div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">Nome</span>
                                        <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" aria-describedby="basic-addon1"
                                               required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">Matrícula</span>
                                        <input type="text" id="matricula" name="matricula" class="form-control" placeholder="Matrícula" 
                                               aria-describedby="basic-addon1" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">NAJ</span>
                                        <select class="form-control form-control-lg" id="naj" name="naj" required >
                                            <option value="" selected >INFORME A NAJ</option>
                                            <option value="NAJ DA 114 SUL" >NAJ DA 114 SUL</option>
                                            <option value="NAJ DA INFÂNCIA E JUVENTUDE" >NAJ DA INFÂNCIA E JUVENTUDE  </option>
                                            <option value="NAJ DE ÁGUAS CLARAS" >NAJ DE ÁGUAS CLARAS</option>
                                            <option value="NAJ DE BRAZLÂNDIA" >NAJ DE BRAZLÂNDIA</option>
                                            <option value="NAJ DE CEILÂNDIA" >NAJ DE CEILÂNDIA</option>
                                            <option value="NAJ DE DEFESA DO CONSUMIDOR" >NAJ DE DEFESA DO CONSUMIDOR</option>
                                            <option value="NAJ DE DEFESA DO IDOSO" >NAJ DE DEFESA DO IDOSO</option>
                                            <option value="NAJ DE DEFESA DOS DIREITOS HUMANOS" >NAJ DE DEFESA DOS DIREITOS HUMANOS</option>
                                            <option value="NAJ DE EXECUÇÃO DE MEDIDAS SOCIOEDUCATIVAS" >NAJ DE EXECUÇÃO DE MEDIDAS SOCIOEDUCATIVAS</option>
                                            <option value="NAJ DE EXECUÇÃO PENAL" >NAJ DE EXECUÇÃO PENAL</option>
                                            <option value="NAJ DE PLANALTINA" >NAJ DE PLANALTINA</option>
                                            <option value="NAJ DE PLANTÃO" >NAJ DE PLANTÃO</option>
                                            <option value="NAJ DE PROMOÇÃO E DEFESA DOS DIREITOS HUMANOS" >NAJ DE PROMOÇÃO E DEFESA DOS DIREITOS HUMANOS</option>
                                            <option value="NAJ DE SAMAMBAIA" >NAJ DE SAMAMBAIA</option>
                                            <option value="NAJ DE SANTA MARIA" >NAJ DE SANTA MARIA</option>
                                            <option value="NAJ DE SÃO SEBASTIÃO" >NAJ DE SÃO SEBASTIÃO</option>
                                            <option value="NAJ DE SEGURANÇA PÚBLICA" >NAJ DE SEGURANÇA PÚBLICA</option>
                                            <option value="NAJ DE SOBRADINHO" >NAJ DE SOBRADINHO</option>
                                            <option value="NAJ DE TAGUATINGA" >NAJ DE TAGUATINGA </option>
                                            <option value="NAJ DO CIDADÃO DA CÂMARA LEGISLATIVA" >NAJ DO CIDADÃO DA CÂMARA LEGISLATIVA</option>
                                            <option value="NAJ DO FAMÍLIA - FÓRUM LEAL FAGUNDES" >NAJ DO FAMÍLIA - FÓRUM LEAL FAGUNDES</option>
                                            <option value="NAJ DO FÓRUM JÚLIO MIRABETE" >NAJ DO FÓRUM JÚLIO MIRABETE</option>
                                            <option value="NAJ DO GAMA" >NAJ DO GAMA</option>
                                            <option value="NAJ DO GUARA" >NAJ DO GUARA</option>
                                            <option value="NAJ DO NÚCLEO BANDEIRANTE" >NAJ DO NÚCLEO BANDEIRANTE</option>
                                            <option value="NAJ DO PARANOÁ" >NAJ DO PARANOÁ</option>
                                            <option value="NAJ DO RECANTO DAS EMAS" >NAJ DO RECANTO DAS EMAS</option>
                                            <option value="NAJ DO RIACHO FUNDO " >NAJ DO RIACHO FUNDO </option>
                                            <option value="NAJ DO SEGUNDO GRAU E TRIBUNAIS SUPERIORES" >NAJ DO SEGUNDO GRAU E TRIBUNAIS SUPERIORES</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">Cargo</span>
                                        <select class="form-control form-control-lg" id="cargo" name="cargo" required >
                                            <option value="" selected >INFORME O CARGO</option>
                                            <option value="AGENTE ADMINISTRATIVO" >AGENTE ADMINISTRATIVO</option>
                                            <option value="AGENTE DE ATIVIDADES RODOVIÁRIAS" >AGENTE DE ATIVIDADES RODOVIÁRIAS</option>
                                            <option value="AGENTE DE EDUCAÇÃO" >AGENTE DE EDUCAÇÃO</option>
                                            <option value="AGENTE DE GESTÃO R. SÓLIDOS" >AGENTE DE GESTÃO R. SÓLIDOS</option>
                                            <option value="AGENTE DE SERVIÇOS OPERACIONAIS" >AGENTE DE SERVIÇOS OPERACIONAIS</option>
                                            <option value="AGENTE DE SUPORTE DE NEGÓCIOS" >AGENTE DE SUPORTE DE NEGÓCIOS</option>
                                            <option value="AGENTE OPERACIONAL" >AGENTE OPERACIONAL</option>
                                            <option value="ANALISTA EM POL. PÚB. GESTÃO GOV." >ANALISTA EM POL. PÚB. GESTÃO GOV.</option>
                                            <option value="ASSESSOR" >ASSESSOR</option>
                                            <option value="ASSESSOR ESPECIAL" >ASSESSOR ESPECIAL</option>
                                            <option value="ASSESSOR TÉCNICO" >ASSESSOR TÉCNICO</option>
                                            <option value="ASSESSOR TÉC. DE ATEND. JUDICIÁRIO" >ASSESSOR TÉC. DE ATEND. JUDICIÁRIO</option>
                                            <option value="ASSISTENTE ADMINISTRATIVO" >ASSISTENTE ADMINISTRATIVO</option>
                                            <option value="ASSISTENTE BÁSICO SERV. SOCIAIS" >ASSISTENTE BÁSICO SERV. SOCIAIS</option>
                                            <option value="ASSISTENTE DE APOIO ATIV.JURÍDICA" >ASSISTENTE DE APOIO ATIV.JURÍDICA</option>
                                            <option value="ASSISTENTE DE EDUCAÇÃO" >ASSISTENTE DE EDUCAÇÃO</option>
                                            <option value="ASSISTENTE DE TRÂNSITO" >ASSISTENTE DE TRÂNSITO</option>
                                            <option value="ASSISTENTE EDUC. DESENHO ARQUIT." >ASSISTENTE EDUC. DESENHO ARQUIT.</option>
                                            <option value="ASSISTENTE GESTÃO RES. SÓLIDOS" >ASSISTENTE GESTÃO RES. SÓLIDOS</option>
                                            <option value="ASSISTENTE SÊNIOR" >ASSISTENTE SÊNIOR</option>
                                            <option value="ASSISTENTE SOCIAL" >ASSISTENTE SOCIAL</option>
                                            <option value="ASSISTENTE TÉCNICO" >ASSISTENTE TÉCNICO</option>
                                            <option value="ASSISTENTE TÉCNICO ADMINISTRAÇÃO" >ASSISTENTE TÉCNICO ADMINISTRAÇÃO</option>
                                            <option value="ATENDENTE DE REINTEGRAÇÃO SOCIAL" >ATENDENTE DE REINTEGRAÇÃO SOCIAL</option>
                                            <option value="AUXILIAR  ADMINISTRATIVO" >AUXILIAR  ADMINISTRATIVO</option>
                                            <option value="AUXILIAR APOIO ATIVIDADE JURÍDICA" >AUXILIAR APOIO ATIVIDADE JURÍDICA</option>
                                            <option value="AUXILIAR ATIVIDADES CULTURAIS" >AUXILIAR ATIVIDADES CULTURAIS</option>
                                            <option value="AUXILIAR DE ATIV.  RODOVIÁRIAS" >AUXILIAR DE ATIV.  RODOVIÁRIAS</option>
                                            <option value="AUXILIAR DE EDUCAÇÃO" >AUXILIAR DE EDUCAÇÃO</option>
                                            <option value="AUXILIAR DE ENFERMAGEM" >AUXILIAR DE ENFERMAGEM</option>
                                            <option value="AUXILIAR DE SERVIÇO SOCIAL" >AUXILIAR DE SERVIÇO SOCIAL</option>
                                            <option value="AUXILIAR DE SERVIÇOS GERAIS" >AUXILIAR DE SERVIÇOS GERAIS</option>
                                            <option value="AUXILIAR DES. FISCALIZ. AGROP." >AUXILIAR DES. FISCALIZ. AGROP.</option>
                                            <option value="AUXILIAR DES.FISC.AGROPECUÁRIA" >AUXILIAR DES.FISC.AGROPECUÁRIA</option>
                                            <option value="AUXILIAR OPERACIONAL SERV. ADM." >AUXILIAR OPERACIONAL SERV. ADM.</option>
                                            <option value="CHEFE DA SEÇÃO DOC.MOV.PROCESSUAL" >CHEFE DA SEÇÃO DOC.MOV.PROCESSUAL</option>
                                            <option value="CHEFE DO NÚCLEO ADM.FINANC.PROJUR" >CHEFE DO NÚCLEO ADM.FINANC.PROJUR</option>
                                            <option value="CHEFE DO NÚCLEO DE DOCUMENTAÇÃO" >CHEFE DO NÚCLEO DE DOCUMENTAÇÃO</option>
                                            <option value="CHEFE DO NÚCLEO DE EMPENHO E PAG." >CHEFE DO NÚCLEO DE EMPENHO E PAG.</option>
                                            <option value="CHEFE DO NÚCLEO DE MATERIAL" >CHEFE DO NÚCLEO DE MATERIAL</option>
                                            <option value="CHEFE DO NÚCLEO DE TRANSPORTE" >CHEFE DO NÚCLEO DE TRANSPORTE</option>
                                            <option value="CHEFE DO NÚCLEO DESENVOLVIMENTO" >CHEFE DO NÚCLEO DESENVOLVIMENTO</option>
                                            <option value="CHEFE DO NÚCLEO PAT. SERV.GERAIS" >CHEFE DO NÚCLEO PAT. SERV.GERAIS</option>
                                            <option value="COBRADOR" >COBRADOR</option>
                                            <option value="COORDENADOR DE PLANEJAMENTO" >COORDENADOR DE PLANEJAMENTO</option>
                                            <option value="DIGITADORA" >DIGITADORA</option>
                                            <option value="DIRETOR DE ARQ.PROC.DADOS E DOC." >DIRETOR DE ARQ.PROC.DADOS E DOC.</option>
                                            <option value="DIRETOR DE ATIVIDADE PSICOSSOCIAL" >DIRETOR DE ATIVIDADE PSICOSSOCIAL</option>
                                            <option value="DIRETOR DE COMUNICAÇÃO SOCIAL" >DIRETOR DE COMUNICAÇÃO SOCIAL</option>
                                            <option value="DIRETOR DE CONTROLE INTERNO" >DIRETOR DE CONTROLE INTERNO</option>
                                            <option value="DIRETOR DE ESTÁGIO" >DIRETOR DE ESTÁGIO</option>
                                            <option value="DIRETOR DE GESTÃO DE PESSOAS" >DIRETOR DE GESTÃO DE PESSOAS</option>
                                            <option value="DIRETOR GESTÃO PAT. E SERV.GERAIS" >DIRETOR GESTÃO PAT. E SERV.GERAIS</option>
                                            <option value="DIRETORA DE GESTÃO ORÇ. E FINANC." >DIRETORA DE GESTÃO ORÇ. E FINANC.</option>
                                            <option value="GERENTE DE CADASTRO" >GERENTE DE CADASTRO</option>
                                            <option value="GERENTE DE CONTRATOS E CONV." >GERENTE DE CONTRATOS E CONV.</option>
                                            <option value="GERENTE DE LOGÍSTICA" >GERENTE DE LOGÍSTICA</option>
                                            <option value="GERENTE DE ORÇAMENTO E FINANÇAS" >GERENTE DE ORÇAMENTO E FINANÇAS</option>
                                            <option value="GERENTE DE PAGAMENTO" >GERENTE DE PAGAMENTO</option>
                                            <option value="GERENTE DE SUPORTE" >GERENTE DE SUPORTE</option>
                                            <option value="GESTOR EM POL. PÚB. GESTÃO GOV." >GESTOR EM POL. PÚB. GESTÃO GOV.</option>
                                            <option value="MOTORISTA" >MOTORISTA</option>
                                            <option value="OUVIDOR" >OUVIDOR</option>
                                            <option value="PROFESSOR" >PROFESSOR</option>
                                            <option value="PROFESSOR CLASSE A" >PROFESSOR CLASSE A</option>
                                            <option value="SUBSECRETÁRIO ADMINISTRAÇÃO GERAL" >SUBSECRETÁRIO ADMINISTRAÇÃO GERAL</option>
                                            <option value="TÉCNICO  ADMINISTRATIVO" >TÉCNICO  ADMINISTRATIVO</option>
                                            <option value="TÉCNICO  EM ASSISTÊNCIA SOCIAL" >TÉCNICO  EM ASSISTÊNCIA SOCIAL</option>
                                            <option value="TÉCNICO ADMINISTRATIVO" >TÉCNICO ADMINISTRATIVO</option>
                                            <option value="TÉCNICO ATIVIDADES CULTURAIS" >TÉCNICO ATIVIDADES CULTURAIS</option>
                                            <option value="TÉCNICO ATIVIDADES RODOVIÁRIAS" >TÉCNICO ATIVIDADES RODOVIÁRIAS</option>
                                            <option value="TÉCNICO DE CONTABILIDADE" >TÉCNICO DE CONTABILIDADE</option>
                                            <option value="TÉCNICO DES. FISC. AGROPECUÁRIA" >TÉCNICO DES. FISC. AGROPECUÁRIA</option>
                                            <option value="TÉCNICO EM GESTÃO EDUCACIONAL" >TÉCNICO EM GESTÃO EDUCACIONAL</option>
                                            <option value="TÉCNICO EM POL. PÚB. GESTÃO GOV." >TÉCNICO EM POL. PÚB. GESTÃO GOV.</option>
                                            <option value="TÉCNICO PLANEJ. GESTÃO URBANA" >TÉCNICO PLANEJ. GESTÃO URBANA</option>
                                            <option value="PROFESSORA" >PROFESSORA</option>
                                            <option value="ASSESSOR - PSICÓLOGA" >ASSESSOR - PSICÓLOGA</option>
                                            <option value="APOIO 1" >APOIO 1</option>
                                            <option value="APOIO 2" >APOIO 2</option>
                                            <option value="APOIO 3" >APOIO 3</option>
                                            <option value="APOIO 4" >APOIO 4</option>
                                            <option value="APOIO 5" >APOIO 5</option>
                                            <option value="APOIO 6" >APOIO 6</option>
                                            <option value="APOIO 7" >APOIO 7</option>
                                            <option value="APOIO 8" >APOIO 8</option>
                                            <option value="APOIO 9" >APOIO 9</option>
                                            <option value="APOIO 10" >APOIO 10</option>
                                            <option value="PROVISÓRIO" >PROVISÓRIO</option>
                                            <option value="SUBSECRETÁRIO DE PROJETOS SOCIAIS" >SUBSECRETÁRIO DE PROJETOS SOCIAIS</option>
                                            <option value="ANALISTA DE APOIO A ASSIST. JUD." >ANALISTA DE APOIO A ASSIST. JUD.</option>
                                            <option value="CHEFE - SDMP" >CHEFE - SDMP</option>
                                            <option value="CHEFE" >CHEFE</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">Senha</span>
                                        <input type="text" id="senha" name="senha" class="form-control" placeholder="Informe a Senha a Ser Cadastrada" aria-describedby="basic-addon1"
                                               required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">Tipo de Acesso</span>
                                        <input type="text" id="tipoAcesso" name="tipoAcesso" class="form-control" placeholder="Tipo de Acesso" 
                                               aria-describedby="basic-addon1" required value="TELEFONE" readonly/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">Observação</span>
                                        <textarea id="observacao" name="observacao" class="form-control" placeholder="Observação" aria-describedby="basic-addon1"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fim Cadastro -->
            <!-- BOTÕES -->
            <center>
                <div class="btn-group">
                    <a class="btn btn-default" href="listar.php" role="button">Voltar</a>
                </div>
                <div class="btn-group">
                    <button id="btsalvar" type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
                <div class="btn-group">
                    <button id="btlimpar" name="btlimpar" type="reset" class="btn btn-danger">Limpar</button>
                </div>
            </center>
        </form>
    </body>
</html>
