pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Test') {
            steps {
                script {
                    sh "bash ./tests.sh"
                }
            }
        }
    }

    post {
        always {
            cleanWs()
        }
    }
}
