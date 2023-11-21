pipeline {
    agent any

    environment {
        PHP_VERSION = '8.2'
        COMPOSER_HOME = '/var/jenkins_home/composer'
    }

    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Build') {
            steps {
                script {
                    sh 'docker compose up -d && composer install --no-interaction --prefer-dist --optimize-autoloader'
                }
            }
        }

        stage('Test') {
            steps {
                script {
                    sh "./tests.sh"
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
