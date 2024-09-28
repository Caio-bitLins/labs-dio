### Configurando Recursos e Dimensionamentos em Máquinas Virtuais na Azure

### Passo 1: Acessar o Portal do Azure

1. *Entrar no Portal*:
   - Acesse [portal.azure.com](https://portal.azure.com) e faça login com sua conta.

### Passo 2: Criar uma Máquina Virtual

1. *Criar um Recurso*:
   - No painel do Azure, clique em *"Criar um recurso"*.

2. *Selecionar Máquinas Virtuais*:
   - Na barra de busca, digite *"Máquina Virtual"* e selecione *"Máquina Virtual"* nos resultados.

3. *Iniciar o Processo de Criação*:
   - Clique em *"Criar"*.

### Passo 3: Configurar a Máquina Virtual

1. *Informações Básicas*:
   - *Assinatura*: Selecione a assinatura desejada.
   - *Grupo de Recursos*: Escolha um grupo existente ou crie um novo (clique em "Criar novo").
   - *Nome da Máquina Virtual*: Dê um nome à VM.
   - *Região*: Selecione a região onde deseja criar a VM.
   - *Imagem*: Escolha o sistema operacional (ex.: Windows Server, Ubuntu).
   - *Tamanho*: Clique em "Selecionar tamanho" e escolha o tamanho adequado para suas necessidades de CPU e memória.

2. *Configurações de Admin*:
   - *Nome de Usuário*: Defina um nome de usuário para acesso à VM.
   - *Senha*: Insira uma senha forte ou, se escolher Linux, use uma chave SSH.

### Passo 4: Configurações de Rede

1. *Configurar Rede*:
   - *Rede Virtual*: Crie uma nova ou escolha uma existente.
   - *Sub-rede*: Selecione a sub-rede padrão ou crie uma nova.
   - *Grupo de Segurança de Rede*: Configure regras para permitir acesso (como RDP para Windows ou SSH para Linux).

### Passo 5: Configurações Adicionais

1. *Gerenciamento*:
   - Ative opções como monitoramento e backups automáticos.

2. *Tags*:
   - Adicione tags para ajudar na organização e faturamento.

### Passo 6: Revisar e Criar

1. *Revisar Configurações*:
   - Verifique todas as configurações e informações inseridas.

2. *Criar a Máquina Virtual*:
   - Clique em *"Criar"* para iniciar a implantação.

### Passo 7: Conectar-se à Máquina Virtual

1. *Conexão*:
   - Após a criação, vá para o grupo de recursos e selecione a VM.
   - Clique em *"Conectar"*.
   - Escolha o método de conexão (RDP para Windows ou SSH para Linux).
   - Siga as instruções para conectar-se à VM.

### Passo 8: Gerenciar a Máquina Virtual

1. *Monitoramento*:
   - Utilize o painel da VM para verificar o desempenho e fazer ajustes conforme necessário.

2. *Parar ou Excluir a VM*:
   - Para parar, clique em *"Desligar"*.
   - Para excluir, clique em *"Excluir"* e confirme a ação.
