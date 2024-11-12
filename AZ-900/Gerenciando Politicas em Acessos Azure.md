### Gerenciando Politicas em Acessos Azure


### 1. Acesso ao Azure Portal
- Acesse o [Azure Portal](https://portal.azure.com).
- Faça login com suas credenciais.

### 2. Navegar para "Políticas"
- No painel de navegação à esquerda, clique em *"Todos os serviços"*.
- Pesquise por *"Políticas"* e clique na opção.

### 3. Criar uma Nova Definição de Política
- No painel de Políticas, clique em *"Definições de política"*.
- Clique em *"+ Definição de política"*.
- Preencha os campos obrigatórios:
  - *Nome*: Dê um nome descritivo à política.
  - *Descrição*: Explique o objetivo da política.
  - *Tipo*: Selecione o tipo de política (por exemplo, "Avaliador de recurso").
  
### 4. Definir a Regra da Política
- Na seção *"Regras"*, defina as condições que os recursos devem atender.
- Você pode usar a linguagem JSON para especificar as regras.
- Exemplo de regra JSON para restringir tipos de recursos:
  json
  {
    "if": {
      "allOf": [
        {
          "field": "type",
          "equals": "Microsoft.Compute/virtualMachines"
        },
        {
          "field": "location",
          "notEquals": "eastus"
        }
      ]
    },
    "then": {
      "effect": "deny"
    }
  }
  

### 5. Salvar e Publicar a Política
- Após definir as regras, clique em *"Salvar"*.
- Você pode testar a política antes de publicá-la, se desejado.

### 6. Atribuir a Política
- Navegue até *"Atribuições"* dentro do painel de Políticas.
- Clique em *"+ Atribuição"*.
- Selecione a definição de política que você criou.
- Defina o escopo (por exemplo, assinatura ou grupo de recursos) e adicione uma descrição.
- Clique em *"Criar"*.

### 7. Monitorar e Avaliar a Conformidade
- Após a atribuição, vá para o painel de *"Conformidade"*.
- Monitore os recursos em relação à política definida.
- Acompanhe os relatórios de conformidade para ajustes futuros.

### 8. Atualizar ou Remover Políticas
- Para atualizar, volte à definição da política e faça as alterações necessárias.
- Para remover, acesse *"Atribuições", selecione a política e clique em *"Excluir"**.

### 9. Revisar e Ajustar Periodicamente
- Revise suas políticas periodicamente para garantir que ainda atendem aos requisitos da sua organização.
- Faça ajustes conforme necessário.
