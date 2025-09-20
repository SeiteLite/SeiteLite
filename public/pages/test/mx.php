<? $p = new Page('MX');
require_once FSL . 'inc/mx.php';
?>

<!-- TODO -->
<table border=1 style="border-collapse: collapse; width: 100%;">
  <? foreach (
    [
      '[b:bold]',
      '<b>bold</b>',
      '[b.tx-red:bold]',
      '[i:italic]',
      '[u:underline]',
      '[h1:heading]',
      '[a](https://seitelite.dev)',
      '[a:SeiteLite](https://seitelite.dev)',
      '[a:https://seitelite.dev]',
      '[mailto](info@seitelite.dev)',
      '[mailto:office](office@seitelite.dev)',
      '[mailto:office@seitelite.dev]',
      '[img](/sl/assets/logo.svg)',
      '[ul:[li:item][li:item]]',
      '[ol:[li:item][li:item]]',
      'a[br]b',
      'a[hr.h hh]b',
      '[-: comment [b:b]aa]',
      '[unknown: blah [b:b]aa]',
      'quotes: "double" \'single\', escaped: \\"\\\'',
      'http://seitelite.dev', // TODO: auto-link
      '[ico:menu]', // TODO: implement icon
      '[btn:push me]', // TODO: implement button
    ] as $mx
  ): ?>
    <tr>
      <td><?= h($mx) ?></td>
      <td><?= mx($mx) ?></td>
    </tr>
  <? endforeach ?>
</table>
