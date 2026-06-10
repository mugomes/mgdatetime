# MGDateTime

> [!NOTE]
> This repository has been migrated to Codeberg, please see: https://codeberg.org/bluice/mgdatetime

Uma biblioteca PHP simples e leve para manipulação de datas e horas, focada em praticidade para tarefas comuns do dia a dia, como formatação de datas, obtenção da data/hora atual, conversão de formatos e exibição de nomes de dias e meses por extenso.

## ✨ Funcionalidades

* Obter a data atual com formato personalizado
* Obter data e hora atuais (now)
* Converter datas entre diferentes formatos
* Retornar o dia da semana a partir de uma data
* Retornar o nome do mês por extenso

## 📦 Instalação

```bash
composer require mugomes/mgdatetime
```

## 🚀 Uso Básico

```php
<?php

use MGDateTime\MGDateTime;

$dt = new MGDateTime();

// Data atual com formato personalizado
echo $dt->date('d/m/Y'); // or $dt->date()

// Data e hora atuais
echo $dt->now();

// Converter formato de data
echo $dt->change('15/01/2026'); // 2026-01-15

// Dia da semana
echo $dt->dayOfTheWeek('2026-01-15'); // Thursday

// Mês por extenso
echo $dt->monthInFull(1); // January
```

## 🧠 Métodos Disponíveis

### `date(string $format = 'd/M/Y'): string`

Retorna a data atual no formato informado.

### `now(): string`

Retorna a data e hora atuais no formato `d/m/Y H:i:s`.

### `change(string $date, string $format = 'd/m/Y', string $newFormat = 'Y-m-d'): string`

Converte uma data de um formato para outro.

### `dayOfTheWeek(string $date): string`

Retorna o nome do dia da semana em inglês a partir de uma data válida.

### `monthInFull(int $mes): string`

Retorna o nome do mês por extenso em inglês.

---

## 👤 Autor

**Murilo Gomes Julio**

🔗 [https://mugomes.github.io](https://mugomes.github.io)

📺 [https://youtube.com/@mugomesoficial](https://youtube.com/@mugomesoficial)

---

## 🤝 Support

* GitHub Sponsors: [https://github.com/sponsors/mugomes](https://github.com/sponsors/mugomes)
* Apoie o projeto: [https://mugomes.github.io/apoie.html](https://mugomes.github.io/apoie.html)

---

## 📜 License

Copyright (c) 2026 Murilo Gomes Julio

Licensed under the [MIT](https://github.com/mugomes/mgdatetime/blob/main/LICENSE).

All contributions to the MGDateTime are subject to this license.
