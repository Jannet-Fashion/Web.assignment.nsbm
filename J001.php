<?php require_once __DIR__ . '/includes/bootstrap.php'; ?>
<?php
// Simple passthrough to existing HTML while adjusting asset paths via output buffer
ob_start();
include __DIR__ . '/J001.html';
$html = ob_get_clean();

// Replace top-level asset paths to point to Images/
$html = str_replace([
  'href="Icon.png"',
  "src=\"logo.png\"",
  "url('bg.jpg')",
  "src=\"ladies summer skirt & blouse.webp\"",
  "src=\"whatsapp logo.png\"",
], [
  'href="Images/Icon.png"',
  'src="Images/logo.png"',
  "url('Images/bg.jpg')",
  'src="Images/ladies summer skirt & blouse.webp"',
  'src="Images/whatsapp logo.png"',
], $html);

echo $html;
