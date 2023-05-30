<x-layout title='Cadastrar Máquina'>
    <h1>Cadastrar Máquina</h1>
    
    <form action="/cadastrar-maquina" method="POST">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" placeholder="Nome da máquina"><br><br>

        <button type="submit">Cadastrar</button>
    </form>
    
</x-layout>
