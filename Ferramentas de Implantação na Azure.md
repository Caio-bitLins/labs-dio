### Ferramentas de Implantação na Azure

1. *Instalar o Azure PowerShell*: Se ainda não tiver, instale o módulo do Azure PowerShell com o comando:
   powershell
   Install-Module -Name Az -AllowClobber -Scope CurrentUser
   

2. *Conectar-se à sua conta Azure*:
   powershell
   Connect-AzAccount
   

3. *Selecionar a assinatura correta* (se necessário):
   powershell
   Set-AzContext -SubscriptionId "sua-subscription-id"
   

4. *Criar um grupo de recursos*:
   powershell
   New-AzResourceGroup -Name "NomeDoGrupo" -Location "localização"
   

5. *Implantar um recurso* (por exemplo, uma máquina virtual):
   powershell
   New-AzVM -ResourceGroupName "NomeDoGrupo" -Name "NomeDaVM" -Image "Win2019Datacenter" -Size "Standard_DS1_v2" -Credential (Get-Credential)
   

6. *Verificar a implantação*:
   powershell
   Get-AzVM -ResourceGroupName "NomeDoGrupo"
   
