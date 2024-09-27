<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/js_cours/dist/styles.css">
</head>

<body class="">
    <div class="     flex items-center justify-center">
        <div>
            <div>
                <object data="java_answer.pdf " type="application/pdf">
                    <p>
                        <a   href="java_answer/java_answer.pdf" alt="n">Download the PDF file.</a>
                    </p>
                </object>
            </div>
            <iframe class="w-[500px] h-[400px]" src="https://www.youtube.com/embed/1hAsTZKdNy0"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
    </div>
</body>
<script>
    class Professor {
    // Constructor to initialize the properties
    constructor(name, teaches) {
        this.name = name;      // Set the professor's name
        this.teaches = teaches; // Set the subject or course the professor teaches
    }

    // Method to grade a paper
    grade(paper) {
        // Example grading logic
        // You can implement your grading logic here
        let score = Math.random() * 100; // Random score for demonstration
        return `Professor ${this.name} graded the paper '${paper}' with a score of ${score.toFixed(2)}`;
    }

    // Method for the professor to introduce themselves
    introduceSelf() {
        return `Hello, my name is ${this.name} and I teach ${this.teaches}.`;
    }
}

// Example usage
const professorSmith = new Professor("John Smith", "Mathematics");

console.log(professorSmith.introduceSelf()); // Outputs: Hello, my name is John Smith and I teach Mathematics.
console.log(professorSmith.grade("Calculus Assignment 1")); // Outputs a graded message with a random score.

</script>
</html>