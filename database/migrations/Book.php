Schema::create('books', function (Blueprint $table) {
    $table->id();
    $table->foreignId('author_id')->constrained()->onDelete('cascade');
    $table->string('title');
    $table->integer('year');
    $table->timestamps();
});