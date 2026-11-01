<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('titulo', 'Biblioteca'); ?> | <?php echo e(config('app.name')); ?></title>

    <style>
        :root { --madera:#4a2615; --madera-clara:#6b3a1f; --burdeos:#8b2a1e; --burdeos-oscuro:#6a1d14; --dorado:#c9a24a;
                --pergamino:#f8f0de; --pergamino-oscuro:#efe2c4; --borde:#d9c49a; --texto:#2b1a10; --verde:#3f6b2a; --rojo:#a8281c; }
        * { box-sizing: border-box; }
        body { margin:0; min-height:100vh; font-family: "Times New Roman", Times, serif; color:var(--texto);
               background: linear-gradient(rgba(30,15,5,.45), rgba(30,15,5,.45)), url("<?php echo e(asset('img/fondo%20libros.jpg')); ?>") center / cover no-repeat fixed var(--madera); }
        header { text-align:center; max-width:1200px; margin:32px auto 0; padding:0 16px; }
        header h1 { margin:0; font-size:clamp(2rem, 5vw, 3.4rem); font-weight:bold; letter-spacing:.06em; text-transform:uppercase; line-height:1.1;
                    background:linear-gradient(180deg, #fff3c4 0%, var(--dorado) 55%, #8a6420 100%); -webkit-background-clip:text; background-clip:text; color:transparent;
                    filter:drop-shadow(0 2px 0 var(--madera)) drop-shadow(0 6px 12px rgba(0,0,0,.85)); }
        header h1::after { content:""; display:block; width:min(360px, 60%); height:3px; margin:12px auto 0;
                           background:linear-gradient(90deg, transparent, var(--dorado), transparent); }
        main { max-width:1200px; margin:24px auto; padding:0 16px; display:grid; gap:20px; }
        .tarjeta { background:var(--pergamino); border:1px solid var(--borde); border-top:4px solid var(--burdeos); border-radius:10px; padding:20px; box-shadow:0 6px 18px rgba(0,0,0,.35); }
        .tarjeta h2 { margin:0 0 14px; font-size:1.3rem; color:var(--burdeos-oscuro); }
        .fila { display:grid; gap:14px; }
        .columnas { display:grid; grid-template-columns: 340px 1fr auto; gap:20px; align-items:start; }
        .columnas > .tarjeta { min-width:0; overflow-x:auto; }
        .bibliotecaria { width:220px; height:auto; position:sticky; top:24px; filter:drop-shadow(0 8px 16px rgba(0,0,0,.6)); }
        @media (max-width: 1100px) { .columnas { grid-template-columns: 340px 1fr; } .bibliotecaria { display:none; } }
        @media (max-width: 900px) { .columnas { grid-template-columns:1fr; } }
        label { display:block; font-weight:bold; font-size:1rem; margin-bottom:6px; color:var(--madera); }
        input { width:100%; padding:10px; border:1px solid var(--borde); border-radius:6px; font-size:1rem; font-family:inherit; background:#fffdf7; color:var(--texto); }
        input:focus { outline:none; border-color:var(--dorado); box-shadow:0 0 0 3px rgba(201,162,74,.3); }
        input.invalido { border-color:var(--rojo); }
        .error { color:var(--rojo); font-size:.9rem; margin-top:4px; }
        button { margin-top:16px; background:var(--burdeos); color:var(--pergamino); border:1px solid var(--burdeos-oscuro); padding:10px 22px; border-radius:6px; font-size:1.05rem; font-family:inherit; cursor:pointer; }
        button:hover { background:var(--burdeos-oscuro); }
        .alerta { padding:12px 16px; border-radius:8px; font-size:1rem; }
        .alerta-exito { background:#eef3e2; color:var(--verde); border:1px solid #bccf9d; }
        .alerta-error { background:#f8e3dc; color:var(--rojo); border:1px solid #e3b2a5; }
        .alerta-con-imagen { display:flex; align-items:center; gap:12px; }
        .alerta-con-imagen img { height:64px; }
        table { width:100%; border-collapse:collapse; }
        th, td { text-align:left; padding:10px; border-bottom:1px solid var(--borde); }
        th { background:var(--madera-clara); color:var(--pergamino); font-size:.9rem; text-transform:uppercase; letter-spacing:.05em; }
        tbody tr:hover { background:var(--pergamino-oscuro); }
        .contador { background:var(--dorado); color:var(--madera); font-weight:bold; border-radius:999px; padding:2px 10px; font-size:.85rem; margin-left:6px; }
        .vacio { text-align:center; color:#7a6045; font-style:italic; padding:24px; }
    </style>
</head>
<body>
    <header>
        <h1><?php echo e(config('app.name')); ?></h1>
    </header>

    <main>
        <?php echo $__env->yieldContent('contenido'); ?>
    </main>
</body>
</html>
<?php /**PATH D:\laragon\www\registro-libros\resources\views/layouts/app.blade.php ENDPATH**/ ?>