<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Codex</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
    </style>
</head>

<body>
    <main style="display: flex; justify-content: center; align-items: center; flex-direction: column; width: 100%; height: calc(100vh - 5rem);">
        <div style="text-align: center">
            <h1 style="font-weight: 800;">Codex</h1>
            <p style="font-weight: 500; color: gray">The best PHP application for your business</p>
        </div>
        <form action="/signin/submit" method="post" style="display: flex; flex-direction: column; gap: 16px; width: 25%;">
            <?= csrf_field() ?>
            <div style="display: flex; flex-direction: column;">
                <label for="email" style="font-weight: 800; margin-bottom: 8px; font-size: 16px; color: #f2f2f2;">Email</label>
                <input type="email" class="email" id="email" name="email" placeholder="john.doe@gmail.com" style="outline: none; width: 100%; min-height: 40px; border-radius: 4px; text-indent: 8px; font-size: 18px; border: none; background-color: #f2f2f2;" required value="<?= old('email') ?>">
            </div>

            <div style="display: flex; flex-direction: column;">
                <label for="password" style="font-weight: 800; margin-bottom: 8px; font-size: 16px; color: #f2f2f2;">Password</label>
                <input type="password" class="password" id="password" name="password" placeholder="****" style="outline: none; width: 100%; min-height: 40px; border-radius: 4px; text-indent: 8px; font-size: 18px; border: none; background-color: #f2f2f2;" required>
            </div>

            <button style="border: none; width: 100%; min-height: 40px; font-weight: 800; font-size: 16px; outline: none; background-color: cornflowerblue; color: white; border-radius: 4px; margin-top: 2rem;" type="submit">Entrar</button>
        </form>
        <?php if (isset($errors)) : ?>
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li style="color:red; font-weight: 800; list-style:none;"><?= esc($error) ?></li>
                <?php endforeach ?>
            </ul>
        <?php endif ?>
    </main>
</body>

</html>