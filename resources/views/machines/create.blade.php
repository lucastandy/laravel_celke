<x-layout title='Cadastrar Máquina'>
    
    <a href="{{route('machines.index')}}">Listar</a>

    <h1>Cadastrar Máquina</h1>
    
    <form action="{{route('machines.store')}}" method="POST">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" placeholder="Nome da máquina"><br><br>

        <button type="submit">Cadastrar</button>
    </form>
    
</x-layout>
