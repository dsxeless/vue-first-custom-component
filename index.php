<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vue Example</title>
    <script src="https://unpkg.com/vue@3"></script>
    <style>
        body {
            height: 100vh; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            flex-direction: column;
        }
        button {
            width: 150px;
        }
    </style>
</head>
<body>
    
    <div id="app">
        <app-button>hi</app-button>
    </div>   
    
    <script type="module">
        import AppButton from "./AppButton.js";

        const app = Vue.createApp({
            components: {
                'app-button': AppButton
            }
        });

        app.mount('#app');
    </script>

</body>
</html>
