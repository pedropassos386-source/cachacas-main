# Checklist de teste local

Use este checklist antes de mesclar o PR na `main`.

## 1. Atualizar a branch local

```bash
git fetch origin
git switch refactor/site-structure
git pull origin refactor/site-structure
```

## 2. Validar o código

Na raiz do projeto:

```bash
php scripts/check-site.php
```

O resultado esperado termina com algo parecido com:

```text
OK: 13 cachaças validadas; páginas, imagens e referências principais estão consistentes.
```

Para verificar a sintaxe de um arquivo específico:

```bash
php -l index.php
php -l pages/festival/historia.php
```

## 3. Abrir o site com PHP

Na raiz do projeto:

```bash
php -S 127.0.0.1:8000
```

Depois acesse no navegador:

```text
http://127.0.0.1:8000/index.php
```

## 4. Conferir a home

- banner aparece normalmente;
- menu abre Home, Premiações e História;
- carrossel mostra 4 cards no desktop, 2 no tablet e 1 no celular;
- setas do carrossel funcionam;
- cards avançam automaticamente;
- todos os 13 botões "Ver Mais" abrem a cachaça correta;
- seção do Festival troca entre os dias sem erro no console;
- não aparece mais `00:00`; enquanto não houver horário confirmado deve aparecer `Horário a confirmar`;
- imagens de Ícaro e Gilmar, Raí Saia Rodada e The Fevers carregam.

## 5. Conferir páginas individuais

Teste especialmente:

```text
/aminesia.php
/coragem.php
/gravata.php
/mineirinha.php
/nova-fonte.php
/ramiro.php
/pinheirinha.php
```

Confirme imagens, botão Home, texto e zoom das fotos.

## 6. Conferir compatibilidade com URLs antigas

Estas URLs devem redirecionar para os novos nomes:

```text
/Aminésia.php   -> /aminesia.php
/Coragem.php    -> /coragem.php
/Gravata.php    -> /gravata.php
/Mineirinha.php -> /mineirinha.php
```

## 7. Conferir páginas especiais

```text
/pages/premiation/premiation.php
/pages/festival/historia.php
```

Na História, teste:

- navegação pelos períodos;
- expandir todas;
- recolher todas;
- abertura individual das programações;
- animações ao rolar a página;
- botão para voltar ao Festival atual.

## 8. Teste responsivo

No DevTools do navegador, conferir pelo menos:

- 390 x 844;
- 768 x 1024;
- 1280 x 720.

Não deve existir rolagem horizontal inesperada.

## 9. Antes do merge

A programação de 2026 ainda precisa de confirmação documental final para associar cada atração ao dia correto. Não altere datas ou dias com base em suposição.
