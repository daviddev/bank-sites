const assignByKeys = (assignTo, assignFrom) => {
    let finalObject = {};

    Object.keys(assignTo).map((key) => {
        finalObject[key] = assignFrom[key]
    });

    return finalObject
};

export default assignByKeys