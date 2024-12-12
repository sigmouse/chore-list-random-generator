exports.handler = async (event) => {
    if (event.httpMethod !== 'POST') {
        return {
            statusCode: 405,
            body: JSON.stringify({ error: 'Method Not Allowed' }),
        };
    }

    const selectedChores = JSON.parse(event.body);

    // Simulate saving to a database or file
    console.log('Selected chores received:', selectedChores);

    return {
        statusCode: 200,
        body: JSON.stringify({ status: 'success', message: 'Chores saved successfully.' }),
    };
};
