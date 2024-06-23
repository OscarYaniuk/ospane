<div x-data="questionComponent">
    <p class="text-gray-600">Acceso de la pregunta <span x-text="currentIndex + 1"></span> a la <span x-text="questions.length"></span></p>

    <div class="p-6 bg-gray-100">
        <template x-if="currentQuestion">
            <div class="p-3 mx-auto bg-white rounded-lg shadow-md" style="max-width: 70rem;">
                <div class="flex items-center mb-4">
                    <span class="mr-2 font-bold text-yellow-800 rounded" x-text="currentQuestion.n_question + '.'"></span>
                    <span class="font-semibold text-gray-800" x-text="currentQuestion.question"></span>
                </div>

                <div class="ml-2">
                    <!-- Corrección del bucle x-for -->
                    <template x-for="[option, letter] in Object.entries({'option1': 'A', 'option2': 'B', 'option3': 'C', 'option4': 'D'})" :key="option">
                        <div class="mb-4 overflow-hidden rounded-lg" x-show="currentQuestion[option]">
                            <label
                                @click="selectedOption = letter; isCorrect = currentQuestion.answer === option; showCorrect = true;"
                                :class="['flex items-center p-4 rounded-lg cursor-pointer',
                                    showCorrect && selectedOption === letter && isCorrect ?
                                    'bg-green-100 border-2 border-green-400' :
                                    showCorrect && selectedOption === letter && !isCorrect ?
                                    'bg-red-100 border-2 border-red-400' :
                                    'hover:bg-gray-100'
                                ]"
                                :data-correct="currentQuestion.answer === option">
                                <span
                                    class="flex items-center justify-center w-8 h-8 font-bold text-gray-700 border-2 border-gray-300 rounded-full"
                                    :class="{ 'bg-green-100 border-green-400': showCorrect && selectedOption === letter && isCorrect, 'bg-red-100 border-red-400': showCorrect && selectedOption === letter && !isCorrect }"
                                    style="min-width: 2rem; min-height: 2rem;" x-text="letter"></span>
                                <span class="ml-3 font-medium text-gray-800" x-text="currentQuestion[option]"></span>
                            </label>
                            <hr class="border-gray-200 dark:border-gray-700">
                        </div>
                    </template>
                </div>

                <p class="p-2 text-xs text-gray-500" x-text="currentQuestion.observation"></p>
                <div class="flex items-center gap-40 mt-4 ">
                    <button @click="prevQuestion()"
                        class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Anterior</button>
                    <button @click="nextQuestion()"
                        class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Siguiente</button>
                </div>

            </div>
        </template>
    </div>
</div>


<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('questionComponent', () => ({
            questions: @json($questions),
            currentIndex: 0,
            selectedOption: null,
            showCorrect: false,
            isCorrect: null,
            get currentQuestion() {
                return this.questions[this.currentIndex];
            },
            nextQuestion() {
                if (this.currentIndex < this.questions.length - 1) {
                    this.currentIndex++;
                    this.resetOptions();
                }
            },
            prevQuestion() {
                if (this.currentIndex > 0) {
                    this.currentIndex--;
                    this.resetOptions();
                }
            },
            resetOptions() {
                this.selectedOption = null;
                this.showCorrect = false;
                this.isCorrect = null;
            }
        }));
    });
</script>
