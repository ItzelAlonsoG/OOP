package Java;

 class Account {
    Integer id;
    String name;
    String document;
    String email;
    String password;

    public Account (String name, String document){
        this.name = name;
        this.document = document;
    }

    void printAccount (){
        System.out.println(" Usuario: " + name + " documento: " + document);
    }
}
