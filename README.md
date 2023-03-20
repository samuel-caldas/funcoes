# Funções
Este é um repositório que contém algumas funções úteis para diferentes propósitos, como enviar e-mails, gerar imagens, conectar com bancos de dados e criar interfaces gráficas.

## Como usar
Para usar as funções deste repositório, você precisa clonar ou baixar o código fonte e incluir os arquivos PHP, CSS e JS no seu projeto. Você também precisa ter um servidor web que suporte PHP.

## Dependências
As funções deste repositório dependem das seguintes bibliotecas:

- PHPMailer: para enviar e-mails usando SMTP
- Canvas: para gerar imagens dinamicamente
- UI: para criar elementos de interface gráfica

## Exemplos
Aqui estão alguns exemplos de como usar as funções deste repositório:

- Para enviar um e-mail usando a função email.php, você precisa configurar os parâmetros do SMTP e chamar a função email($to, $subject, $message) passando o destinatário, o assunto e a mensagem do e-mail.
- Para gerar uma imagem usando a função img.php, você precisa passar os parâmetros da imagem como query string na URL da função. Por exemplo: img.php?width=300&height=200&color=red&text=Hello
- Para criar uma interface gráfica usando a função UI.php, você precisa incluir o arquivo UI.php no seu código PHP e usar as classes UI_Element e UI_Container para criar os elementos da interface. Por exemplo:

```php
<?php
include 'UI.php';
$button = new UI_Element('button', 'Click me');
$div = new UI_Container('div', $button);
echo $div->render();
?>
```
