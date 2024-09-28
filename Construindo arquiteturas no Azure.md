# Criação de Infraestrutura no Azure | Grupo de Recursos

## 1. Portal do Azure 

Entrar no [Portal do Azure](https://portal.azure.com).

## 2. Criação do Grupo de Recursos |-------------------------------------------------------|

1. No painel do Azure, busque por “Grupos de Recursos” ou “Resource Groups” na barra de pesquisa.
2. Clique em **"Criar"** para iniciar a criação de um novo grupo de recursos.

   ![s](https://github.com/user-attachments/assets/3d26af1f-5ee7-46f8-8c62-662ead21aa8b)

4. Preencha as seguintes informações:
   - **Nome do Grupo de Recursos**: Dê um nome que identifique facilmente o grupo e seu propósito.
   - **Região**: Selecione a região onde o grupo será criado. É recomendado escolher a mesma região para todos os recursos relacionados para reduzir a latência e os custos.
5. Clique em **"Revisar + Criar"** e depois em **"Criar"**.

   ![aa](https://github.com/user-attachments/assets/52f5df5b-b793-43cb-b6d4-b532d50a575a)


## 3. Criação da Rede Virtual |-------------------------------------------------------|

1. No painel do Azure, busque por “Redes Virtuais” ou “Virtual Networks”.
2. Clique em **"Criar"** para iniciar a configuração de uma nova rede virtual.

   ![rr](https://github.com/user-attachments/assets/e11dc79a-d5ed-4e23-b65d-7595b208835d)

4. Preencha os detalhes: |-------------------------------------------------------|
   - **Nome da Rede Virtual**: Escolha um nome que facilite a identificação da rede.
   - **Grupo de Recursos**: Selecione o grupo de recursos criado anteriormente.
   - **Região**: Escolha a mesma região do grupo de recursos.
   - **Endereço IP**: Defina o intervalo de endereços IP para a rede virtual.
  
   ![r1](https://github.com/user-attachments/assets/130e7781-2604-46a9-be03-66edfdc0fa37)
   
6. Clique em **"Revisar + Criar"** e depois em **"Criar"**. |-------------------------------------------------------|

   ![r2](https://github.com/user-attachments/assets/83521a75-553a-4883-afd1-b3b9a6d4bf7c)![r3](https://github.com/user-attachments/assets/f5cdeae6-2fca-4918-8520-18df857666f5)


## 1. Criação de Regras no Grupo de Recursos |-------------------------------------------------------|



Para garantir a segurança e a eficiência dos seus recursos, é fundamental configurar regras apropriadas no Grupo de Recursos. Aqui está como você pode criar e gerenciar essas regras:

1. **Acesse o Grupo de Recursos**: |-------------------------------------------------------|
   - No painel do Azure, busque por “Grupos de Recursos” e selecione o grupo que você deseja configurar.

2. **Configuração de Regras de Segurança**:
   - **Grupo de Segurança de Rede (NSG)**: Adicione ou configure regras de segurança para controlar o tráfego de entrada e saída. No painel de NSG, você pode definir regras para permitir ou negar tráfego com base em IPs, portas e protocolos.
   - **Regras de Acesso**: Configure permissões e políticas para usuários e serviços que acessam o grupo de recursos. Utilize funções e permissões apropriadas para garantir que apenas usuários autorizados possam modificar ou visualizar os recursos.

3. **Monitoramento e Alertas**: |-------------------------------------------------------|
   - **Configuração de Alertas**: Defina alertas para monitorar atividades e possíveis violação de políticas de segurança. Configure notificações para ações suspeitas ou uso não autorizado de recursos. 

4. **Revisão e Atualização**: |-------------------------------------------------------|
   - **Revisão Periódica**: Realize revisões periódicas das regras e políticas para garantir que estejam atualizadas com as melhores práticas e os requisitos de segurança atuais.

## 2. Exemplo de Vulnerabilidades com Falta de Regras em Grupo de Recursos |-------------------------------------------------------|

Caso você não crie regras apropriadas em um Grupo de Recursos, pode enfrentar as seguintes vulnerabilidades:

- **Acesso Não Controlado**: Recursos dentro do grupo podem ser acessados por usuários não autorizados, expondo dados sensíveis e comprometendo a segurança. 
- **Ataques de Rede**: Sem regras de segurança adequadas, suas redes podem estar suscetíveis a ataques externos, como DDoS ou acesso não autorizado a portas abertas. 
- **Custo Excessivo**: Recursos não monitorados podem ser utilizados de maneira inadequada, resultando em custos inesperados e elevados. 
- **Falta de Monitoramento**: A ausência de configuração apropriada pode levar à falta de visibilidade sobre o uso e estado dos recursos, dificultando a identificação de problemas e a realização de auditorias. 

Certifique-se de sempre definir regras de segurança e monitoramento apropriadas para proteger seus recursos e otimizar o gerenciamento de custos.

<img src="https://media.tenor.com/qVKlQMB2DpsAAAAM/hacker-hacking.gif" width="230"></h2>
