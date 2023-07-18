@extends('inicio.inicio')

@section('title', 'Princiopal')

@section('header')
    <div class="col-lg-10">
        <h2>Principal</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
        </ol>
    </div>
@endsection

@section('content')
    <h1>Mi página prinicpal</h1>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Reducción de tamaño y calidad de una foto</title>
    </head>

    <body>
        <input type="file" id="inputFile" accept="image/*" />
        <br>
        <canvas id="outputCanvas" style="max-width: 500px;"></canvas>
    @endsection

    <script>
        
        @section('ready')

        // Función para reducir el tamaño y calidad de la foto
        function resizeAndCompressImage(file, maxWidth, maxHeight, quality) {
            return new Promise((resolve, reject) => {
                const img = new Image();
                const canvas = document.createElement('canvas');
                const ctx = canvas.getContext('2d');

                img.onload = () => {
                    let width = img.width;
                    let height = img.height;

                    if (width > maxWidth) {
                        height *= maxWidth / width;
                        width = maxWidth;
                    }

                    if (height > maxHeight) {
                        width *= maxHeight / height;
                        height = maxHeight;
                    }

                    canvas.width = width;
                    canvas.height = height;

                    ctx.drawImage(img, 0, 0, width, height);

                    canvas.toBlob(
                        (blob) => {
                            resolve(blob);
                        },
                        'image/jpeg',
                        quality
                    );
                };

                img.onerror = (error) => {
                    reject(error);
                };

                img.src = URL.createObjectURL(file);
            });
        }

        // Manejador de eventos para el cambio en el campo de entrada de archivo
        document.getElementById('inputFile').addEventListener('change', async (event) => {
            const file = event.target.files[0];
            const maxWidth = 1280; // Ancho máximo deseado
            const maxHeight = 800; // Alto máximo deseado
            const quality = 0.7; // Calidad de compresión (0.0 - 1.0)

            try {
                const resizedImage = await resizeAndCompressImage(file, maxWidth, maxHeight, quality);

                // Mostrar la imagen resultante en el canvas
                const canvas = document.getElementById('outputCanvas');
                const ctx = canvas.getContext('2d');

                const img = new Image();
                img.onload = () => {
                    canvas.width = img.width;
                    canvas.height = img.height;
                    ctx.drawImage(img, 0, 0);
                };

                img.src = URL.createObjectURL(resizedImage);
            } catch (error) {
                console.error(error);
            }
        });

        @endsection;


        
    </script>
